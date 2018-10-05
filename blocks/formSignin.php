

    <form method="POST" enctype="multipart/form-data" style="background-color: #ff8400">
    <fieldset>
        <legend>
            Đăng kí
        </legend>
        <table>
            <tr>
                <td>Họ Tên</td>
                <td><input type="text" name="ten" id="ten" style="width: 85%"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="username" style="width: 85%">
                    <!--                        --><?php
                    //                        echo $_GET['kq']
                    //                        ?>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password" style="width: 85%"></td>
            </tr>
            <tr>
                <td>Địa Chỉ</td>
                <td><input type="text" name="diachi" id="diachi" style="width: 85%"></td>
            </tr>
            <tr>
                <td>Điện Thoại</td>
                <td><input type="tel" name="dienthoai" id="dienthoai" style="width: 85%"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email" style="width: 85%"></td>
            </tr>
            <tr>
                <td>Ngày Sinh</td>
                <td><input type="date" name="ngaysinh" id="ngaysinh" style="width: 85%"></td>
            </tr>
            <tr>
                <td>Giới Tính</td>
                <td>
                    <input  type="radio" name="rdgioitinh" id="rdgioitinh" value="1" checked/> Nam
                    <input type="radio" name="rdgioitinh" id="rdgioitinh" value="0"/>Nữ
                </td>
            </tr>
            <tr>
                <td  colspan="2" align="center">
<!--                    <input type="button" name="btnLogin" id="btnLogin" value="Đăng nhập">-->
                    <input type="submit"  name="btnSignin" id="btnSignin" value="Đăng kí">
                </td>

            </tr>

        </table>
    </fieldset>

</form>



