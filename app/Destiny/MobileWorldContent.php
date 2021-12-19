<?php

namespace App\Destiny;

use Exception;
use App\Destiny\DB\Connection;
use Illuminate\Support\Collection;

class MobileWorldContent
{

    function __construct()
    {
        $this->db = new Connection;
    }

    public function contentTables()
    {
        $data = [];

        $results = $this->listTableNames();

        while ($row = $results->fetchArray()) {
            array_push($data, $row['tbl_name']);
        }

        $result = count($data) > 0 ? $data : throw new Exception("There was an error processing the db!\n");

        return $result;
    }

    public function listTableColumns(string $tableName): array
    {
        $data = [];
        $keys = [];

        $query = $this->queryJsonTable($tableName);

        while ($query_row = $query->fetchArray()) {
            array_push($data, json_decode($query_row['json'], true));
        }

        foreach ($data as $d) {
            array_push($keys, array_keys($d));
        }

        $columns = array_merge_recursive_distinct(...array_values($keys));

        return $columns;
    }

    public function contentSearch(): array
    {
        $response = $this->listTableNames();
        $data = [];

        while ($row = $response->fetchArray()) {
            // array_push($data, $row['type']);
            print_r($row);
        }

        return $row;
    }

    public function viewContentTable(string $tablename): array
    {
        $data = [];
        $query = $this->queryJsonTable($tablename);

        while ($query_row = $query->fetchArray()) {
            array_push($data, json_decode($query_row['json']));
        }

        return $data;
    }

    /**
     * Returns the JSON (stored in a BLOB column type) column from the data.
     *
     * @param string $table
     * @return object
     */
    public function queryJsonTable(string $table): object
    {
        return $this->db->query("SELECT json FROM $table");
    }

    /**
     * listTableNames
     *
     * Returns a list of all the tables in the MobileWorldContent DB
     *
     * @return object
     */
    public function listTableNames(): object
    {
        return $this->db->query("SELECT tbl_name FROM 'main'.sqlite_master");
    }

    /**
     * Private Mehtods
     * =============================================================
     *
     */

    /**
     * listDbDetails
     *
     * Returns all avaliable details in the MobileWorldContent file.
     *
     * @return object
     */
    private function listDbDetails(): object
    {
        return $this->db->query("SELECT type,name,sql,tbl_name FROM 'main'.sqlite_master");
    }

    private function listTableType(string $table): string
    {
        return $this->db->query("SELECT type FROM 'main'.$table");
    }

    private function displayCount(string $table): int
    {
        return $this->db->query("SELECT COUNT(*) FROM 'main'.$table");
    }
}
