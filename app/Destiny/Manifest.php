<?php

namespace App\Destiny;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class Manifest
{

    const ROOT_PATH = "https://www.bungie.net";

    public function __construct()
    {
        // parent::construct();
    }

    // return the latest manifest db file
    private function download()
    {
        print "Downloading Manifest file\n";
        $response = Http::withHeaders([
            "X-API-KEY" => env('BUNGIE_KEY')
        ])->get(self::ROOT_PATH . "/Platform/Destiny2/Manifest/")->throw()->json();

        return $response;
    }

    /**
     * store()
     *
     * @param string $path
     * @return bool
     */
    private function store($data): bool
    {
        $path = public_path('storage/manifests/manifest.json');
        $file = NULL;
        file_exists($path) ?
            $this->deleteManifest() :
            $file = Storage::put('public/manifests/manifest.json', json_encode($data['Response'], JSON_PRETTY_PRINT), 'public');
        if ($file) {
            print "Manifest file successfully stored in " . $path . "\n";
            return 1;
        } else {
            echo ('Something went wrong');
            return 0;
        }
    }

    /**
     * Delete existing manifest
     */
    private function deleteManifest(): void
    {
        print "Deleteing currently stored Manifest.\n";
        $status = Storage::delete('public/manifests/manifest.json');
    }

    /**
     * readStoredManifest
     * Reads the locally stored Manifest file, allowing access to each of it's values
     *
     * Avaliable properties are:
     * - version: $object->version
     * - mobileAssetContentPath: $object->mobileAssetContentPath
     *
     * @param Object $file
     * @return json
     */
    public function readStoredManifest()
    {
        if (!$this->checkForLocalManifest()) {
            print "Manifest does not exist locally\n";
            $data = $this->download();
            $this->store($data);
            print "Please try your command again now that we have a copy of the Manifest.\n";
            exit;
        } else {
            $file = file_get_contents(public_path('storage/manifests/manifest.json'));
            return json_decode($file);
        };
    }

    public function getLocalVersion()
    {
        $local = $this->readStoredManifest();

        return $local->version;
    }

    public function getRemoteVersion()
    {
        $remote = $this->download();

        return $remote['Response']['version'];
    }

    /**
     * checkVersion
     * Checks the version of the locally stored Manifest File
     *
     * @todo Change print calls to flash messages to session
     *
     * @return string
     */
    public function checkVersion()
    {
        try {
            $local = $this->readStoredManifest();
        } catch (\ErrorException $e) {
            print "There was an issue finding or reading your locally stored Manifest\n";
            throw $e;
        }
        $localVersion = $local->version;
        $remoteVersion = $this->getRemoteVersion();

        print "Local Version: " . $localVersion . "\n";
        print "Remote Version: " . $remoteVersion . "\n";

        if ($localVersion != $remoteVersion) {
            print "The current local version of the Manifest is out of date.\n";

            print "Deleteing the old one first.";
            Storage::delete('public/manifests/manifest.json');

            print "Updating to the newest version.";
            $this->store($this->download());

            // Check and return the lastest version number to stdout
            $newLocal = $this->readStoredManifest();
            return $newLocal->version;
        } else {
            print "Your locally stored version of the Manifest is up to date.\n";
            return $localVersion;
        }
    }

    /**
     * Check if manifest file/dir exists in public directory
     */
    private function checkForLocalManifest()
    {
        if (Storage::assertExists('public/manifests/manifest.json')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Download the mobileWorldContent / Sqlite database from the current
     * Manifest.
     *
     * @param string $path
     *
     * @return mixed
     */
    public function downloadMobileWorldContent(string $path)
    {
        print "Downloading " . self::ROOT_PATH . $path . "\n";
        $response = Http::withHeaders([
            "X-API-KEY" => env('BUNGIE_KEY')
        ])->get(self::ROOT_PATH . $path)->throw();

        return $response->getBody();
    }

    /**
     * Store the downloaded Manifest
     *
     * @param string $lang
     * @param string $data
     */
    public function storeMobileWorldContent(string $lang, string $data)
    {
        // Download the content file
        $db = $this->downloadMobileWorldContent($data);

        // save it as a compressed file, which it is
        $file = Storage::put('public/contentfiles/' . $lang . '/contentfile.zip', $db, 'public');

        if ($file) {
            print $lang . " database saved successfully.\n";

            // unzip the file
            $zip = new \ZipArchive;

            if ($zip->open('public/storage/contentfiles/' . $lang . '/contentfile.zip') === true) {
                print "extracting the archive\n";
                $zip->extractTo("storage/app/public/contentfiles/" . $lang . "/")
                    ? print "Extraction status: " . $zip->getStatusString() . "\n\n"
                    : print "Extraction failure status: " . $zip->getStatusString() . "\n\n";

                print "closing the archive\n";
                $zip->close()
                    ? print "Closing status: " . $zip->getStatusString() . "\n\n"
                    : print "Closing failure status: " . $zip->getStatusString() . "\n\n";
            } else {
                echo "Extraction Failed!";
            }

            return 1;
        } else {
            print "There was an issue saving the " . $lang . " database locally.";
            return 0;
        }
    }

    /**
     * Store the downloaded Manifest
     *
     * @param string $path
     */
    public function storeMobileAssetContent(string $path)
    {
        // Download the content file
        $db = $this->downloadMobileWorldContent($path);

        // save it as a compressed file, which it is
        $file = Storage::put('public/contentfiles/asset_contentfile.zip', $db, 'public');

        if ($file) {
            print "Mobile Asset database saved successfully.\n";

            // unzip the file
            $zip = new \ZipArchive;

            if ($zip->open('public/storage/contentfiles/asset_contentfile.zip') === true) {
                print "extracting the archive\n";
                $zip->extractTo("storage/app/public/contentfiles/assets")
                    ? print "Extraction status: " . $zip->getStatusString() . "\n\n"
                    : print "Extraction failure status: " . $zip->getStatusString() . "\n\n";

                print "closing the archive\n";
                $zip->close()
                    ? print "Closing status: " . $zip->getStatusString() . "\n\n"
                    : print "Closing failure status: " . $zip->getStatusString() . "\n\n";
            } else {
                echo "Extraction Failed!";
            }

            return 1;
        } else {
            print "There was an issue saving the asset database locally.";
            return 0;
        }
    }
}
