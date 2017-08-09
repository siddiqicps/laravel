<?php

/**
* Check user permissions
*
* @param $user_permissions
* @param $permissions
*/
function checkPermission($user_permissions, $permissions)
{
   if($currency == 'USD') {
        return number_format($number, 2, '.', ',');
   }
   return number_format($number, 0, '.', '.');
}


/**
* Check user role
*
* @param $user_role
* @param $roles
*/
function checkRole($user, $expression)
{
    //var_dump($user); exit;
   $roles = explode(',',$expression); 
   $user_role = $user->roles[0]->slug;
   if(in_array($user_role,$roles))
        return true;
    else
        return false;
}

