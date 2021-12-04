<?php
class UserException extends Exception
{
    const ERROR_DB = 0;
    const ERROR_OTHER = 1;
    const ERROR_WEB = 2;
    const ERROR_INPUT = 3;
    private $errFlag;
    private $msg;
    private $exp;
    public function __construct(?Exception $exp, string $msg, int $errFlag)
    {
        $this->errFlag = $errFlag;
        $this->msg = $msg;
        $this->exp = $exp;
    }
    public function getErrFlag(): int
    {
        return $this->errFlag;
    }
    public function getMsg(): string
    {
        return $this->msg;
    }
}
try {
    throw new UserException(null, "测试代码", UserException::ERROR_OTHER);
} catch (UserException $e) {
    if ($e->getErrFlag() == UserException::ERROR_OTHER) {
        echo "other error, reason is " . $e->getMsg() . PHP_EOL;
        // other error, reason is 测试代码
    }
}
