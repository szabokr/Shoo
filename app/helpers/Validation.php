<?php
class Validation
{
    private static function checkRequired($roles, $request)
    {
        $errors = [];
        $required = array_diff(array_keys($request), array_keys($roles));

        foreach ($required as $value) {
            array_push($errors, $value . ' is required');
        }
        return $errors;
    }

    private static function checkFormat($roles, $request)
    {
        $errors = [];
        foreach ($roles as $roleKey => $roleValue) {
            foreach ($request as $requestKey => $requestValue) {
                if ($roleKey == $requestKey && preg_match($roleValue, $requestValue)) {
                    array_push($errors, 'Incorrect "' . $roleKey . '" format');
                }
            }
        }
        return $errors;
    }

    public static function validate($roles, $request)
    {
        unset($request['submit']);
        return array_merge(self::checkRequired($roles, $request), self::checkFormat($roles, $request));
    }
}
