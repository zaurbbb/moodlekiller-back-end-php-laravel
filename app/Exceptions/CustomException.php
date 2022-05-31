<?php
  
namespace App\Exceptions;
  
use Exception;
  
class CustomException extends Exception
{
    public function report()
    {
    }
  
    public function render($request)
    {
        return response()->view(
                'errors.custom',
                array(
                    'exception' => $this
                )
        );
    }
}
