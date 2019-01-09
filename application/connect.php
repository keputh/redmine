<?php
Class Connect
{
    
    public static function connectDB()
    {
        return new mysqli("127.0.0.1", "root", "", "big_base");
    }
    
}
