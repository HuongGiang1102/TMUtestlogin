<?php
namespace Page\Acceptance;

class LoginPage
{
    // Khai báo URL của trang đăng nhập
    public static $URL = '/login';

    // Khai báo các phần tử trên trang đăng nhập bằng XPath
    const EMAIL_FIELD = "//input[@id='email']";
    const PASSWORD_FIELD = "//input[@id='password']";
    const REMEMBER_ME_CHECKBOX = "//input[@id='remember']";
    const LOGIN_BUTTON = "//button[contains(text(),'Login')]";
    const FORGOT_PASSWORD_LINK = "//a[contains(text(),'Forgot Your Password?')]";

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    // Hàm khởi tạo, nhận tham số là một đối tượng AcceptanceTester để thực hiện các thao tác kiểm thử
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    // Hàm này đại diện cho việc di chuyển đến trang đăng nhập
    public function onPage(){
        $this->acceptanceTester->amOnPage(self::$URL);
        return $this;
    }

    // Hàm này điền thông tin email vào trường đăng nhập email
    public function fillEmail($email){
        $this->acceptanceTester->retryFillField(self::EMAIL_FIELD, $email);
        return $this;
    }

    // Hàm này điền thông tin mật khẩu vào trường đăng nhập mật khẩu
    public function fillPassword($password){
        $this->acceptanceTester->retryFillField(self::PASSWORD_FIELD, $password);
        return $this;
    }

    // Hàm này kiểm tra và chọn tính năng "Nhớ mật khẩu"
    public function checkRememberMe(){
        $this->acceptanceTester->retryCheckOption(self::REMEMBER_ME_CHECKBOX);
        return $this;
    }

    // Hàm này thực hiện nhấp vào nút "Đăng nhập"
    public function clickLoginButton(){
        $this->acceptanceTester->retryClick(self::LOGIN_BUTTON);
        return $this;
    }

    // Hàm này thực hiện nhấp vào liên kết "Forgot Your Password?"
    public function clickForgotPassword(){
        $this->acceptanceTester->retryClick(self::FORGOT_PASSWORD_LINK);
        return $this;
    }
}
