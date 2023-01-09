<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.1.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <br>
        <form id="myform1" name="form1" method="post" action="" novalidate>
            <div class="form-group row">
                <label for="input_name" class="col-sm-3 col-form-label text-right">ชื่อ นามสกุล</label>
                <div class="col">
                    <input type="text" class="form-control" name="input_name" id="input_name" autocomplete="off"
                        value="" required>
                    <div class="invalid-feedback">
                        กรุณากรอกชื่อ นามสกุล
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="input_tel" class="col-sm-3 col-form-label text-right">เบอร์มือถือ</label>
                <div class="col">
                    <input type="text" class="form-control" pattern="^0([8|9|6])([0-9]{8}$)" name="input_tel"
                        id="input_tel" autocomplete="off" value="" required>
                    <div class="invalid-feedback">
                        กรุณากรอกเบอร์มือถือตัวเลข 10 หลัก
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="input_email" class="col-sm-3 col-form-label text-right">อีเมล</label>
                <div class="col">
                    <input type="text" class="form-control" name="input_email" id="input_email"
                        pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autocomplete="off" value="" required>
                    <div class="invalid-feedback">
                        กรุณากรอกอีเมล
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="input_otp" class="col-sm-3 col-form-label text-right">รหัส OTP</label>
                <div class="col">
                    <input type="number" class="form-control" name="input_otp" id="input_otp" maxlength="5" min="1"
                        max="99999"
                        oninput="this.value.length<this.maxLength?this.min=Math.pow(10, this.value.length):this.min=0"
                        onkeypress="return (this.value.length>=this.maxLength)?false:true" autocomplete="off" value=""
                        required>
                    <div class="invalid-feedback">
                        กรุณากรอกรหัส OTP เป็นตัวเลข 5 หลัก
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-3 pt-0 text-right">เพศ</legend>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio_gender" id="radio_gender_1"
                            value="male" required>
                        <label class="form-check-label" for="radio_gender_1">
                            ชาย
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio_gender" id="radio_gender_2"
                            value="female" required>
                        <label class="form-check-label" for="radio_gender_2">
                            หญิง
                        </label>
                        <div class="invalid-feedback">
                            กรุณาเลือกเพศ
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="textarea_address" class="col-sm-3 col-form-label text-right">ที่อยู่</label>
                <div class="col">
                    <textarea class="form-control" name="textarea_address" id="textarea_address" rows="3"
                        required></textarea>
                    <div class="invalid-feedback">
                        กรุณากรอกที่อยู่
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="select_province" class="col-sm-3 col-form-label text-right">จังหวัด</label>
                <div class="col">
                    <select class="custom-select" name="select_province" id="select_province" required>
                        <option value="">เลือกจังหวัด</option>
                        <option value="กรุงเทพ">กรุงเทพ</option>
                    </select>
                    <div class="invalid-feedback">
                        กรุณาเลือกจังหวัด
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="input_zipcode" class="col-sm-3 col-form-label text-right">รหัสไปรษณีย์</label>
                <div class="col">
                    <input type="number" class="form-control" name="input_zipcode" id="input_zipcode" autocomplete="off"
                        value="" min="10000" max="99999" required>
                    <div class="invalid-feedback">
                        กรุณากรอกรหัสไปรณีย์
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3 offset-sm-3 text-right pt-3">
                    <button type="submit" name="btn_submit" id="btn_submit" value="1"
                        class="btn btn-primary btn-block">ส่งข้อมูล</button>
                </div>
            </div>
        </form>

    </div>

    <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(function() {
        $("#myform1").on("submit", function() {
            var form = $(this)[0];
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });
    </script>
</body>

</html>