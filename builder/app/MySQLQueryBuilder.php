<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface {
    private $query;

    public function select(string $fields): MySQLQueryBuilder {
        $this->query = "SELECT $fields ";
        return $this;
    }

    public function from(string $table): MySQLQueryBuilder {
        $this->query .= "FROM $table ";
        return $this;
    }

    public function where(string $condition): MySQLQueryBuilder {
        $this->query .= "WHERE $condition;";
        return $this;
    }

    public function getQuery(): string {
        return $this->query;
    }
}