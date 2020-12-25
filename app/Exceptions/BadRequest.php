<?php

namespace App\Exceptions;

use Exception;

class BadRequest extends Exception
{
        //
     /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        //
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response()->json([
            "status_message"=>"Bad Request",
            "status_code" => 400,
            "path" => $request->path(),
            "method" => $request->method(),
        ], 400);
    }
}
