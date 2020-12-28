@extends('layouts.app')
@section('layouts')
    <div id="landing_page">
        <div class="ui landing-page">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="center-content">
                        <div class="d-flex">
                            <div class="flex-item">
                                <div class="fa fa-user-circle "></div>
                            </div>
                            <div class="flex-item">
                                <form class="form-login">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="อีเมล์ หรือ รหัสนักศึกษา">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="กรอกรหัสผ่าน">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary /" value="เข้าสู่ระบบ">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

