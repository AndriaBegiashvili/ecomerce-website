<?php
interface DbconnInterface{
    public function connect();
    public function delete(array $skus);
}