<?php

// child class
class TableData extends DataTable
{
    // should same output return as parent
    public function showData($data)
    {
        return var_dump(array(1,2,3));
    }
}