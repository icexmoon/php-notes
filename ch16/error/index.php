<?php
enum Environment
{
    case PRODUCT; //生产环境
    case DEVELOP; //开发环境
    case PRE_PRODUCT; //预生产环境
}
$configs = array(
    'env' => Environment::PRODUCT,
);
function write_log(string $msg): void
{
    $fopen = fopen("sys.log", "a");
    $msg = date("Y-m-d H:i:s") . ": " . $msg . "\n";
    fwrite($fopen, $msg);
    fclose($fopen);
}
if ($configs['env'] === Environment::DEVELOP) {
    error_reporting(E_ALL);
    ini_set("display_errors", "1");
    function exp_handle($exp)
    {
        if ($exp instanceof Error) {
            echo $exp->error() . PHP_EOL;
        } elseif ($exp instanceof Exception) {
            echo $exp->getMessage() . PHP_EOL;
        } else {
            var_export($exp);
        }
    }
} elseif ($configs['env'] === Environment::PRE_PRODUCT || $configs['env'] === Environment::PRODUCT) {
    error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    ini_set("display_errors", "stderr");
    function exp_handle($exp)
    {
        if ($exp instanceof Error) {
            write_log($exp->error());
        } elseif ($exp instanceof Exception) {
            write_log($exp->getMessage());
        } else {
            write_log(var_export($exp, true));
        }
    }
} else {;
}
set_exception_handler("exp_handle");
