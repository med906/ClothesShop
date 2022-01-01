
{{--account page--}}
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="{{asset('images/image1.png')}}">
            </div>

            <div class="col-2">
                <div class="from-container">
                    <div class="form-btn">
                        <span onclick="loginUser()">Login</span>
                        <span onclick="registerUser()">Register</span>
                        <hr id="indicator">
                    </div>

                    <form id="loginForm">
                        <input class="px-2" type="text" placeholder="Username">
                        <input class="px-2" type="password" placeholder="Password">
                        <button type="submit" class="btn">Login</button>
                        <a href="">Forgot password</a>
                    </form>

                    <form id="RegForm">
                        <input class="px-2" type="text" placeholder="Username">
                        <input class="px-2" type="email" placeholder="Email">
                        <input class="px-2" type="password" placeholder="Password">
                        <button type="submit" class="btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

