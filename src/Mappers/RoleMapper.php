<?php

class RoleMapper
{
    public static function mapToObject(array $datas)
    {
        return new Role(
            $datas['id'],
            $datas['identity'],
        );
    }




}