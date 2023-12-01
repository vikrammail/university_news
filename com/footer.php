<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700&display=swap');

* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
}

/* body {
    background: #eef8ff;
} */

footer {
    /* width: 100%; */
    /* position: absolute; */
    bottom: 0;
    background: linear-gradient(to right, #00093c, #3d0b00);
    color: #fff;
    padding: 100px 0 30px;
    border-top-left-radius: 125px;
    font-size: 13px;
    line-height: 20px;
}

.row {
    width: 85%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
}

.col {
    flex-basis: 25%;
    padding: 10px;
}

.col:nth-child(2),
.col:nth-child(3) {
    flex-basis: 15%
}

.logo {
    width: 80px;
    margin-bottom: 30px;
}

.col h3 {
    width: fit-content;
    margin-bottom: 40px;
    position: relative;
}

.email-id {
    width: fit-content;
    border-bottom: 1px solid #ccc;
    margin: 20px 0;
}

ul li {
    list-style: none;
    margin-bottom: 12px;
}

ul li a {
    text-decoration: none;
    color: #fff;
}

form {
    padding-bottom: 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid #ccc;
    margin-bottom: 50px;
}


form .far {
    font-size: 18px;
    margin-right: 10px;
}

form input {
    width: 100%;
    background: transparent;
    color: #ccc;
    border: 0;
    outline: none;
}

form button {
    background: transparent;
    border: 0;
    outline: none;
    cursor: pointer;
}

form button .fas {
    font-size: 16px;
    color: #ccc;
}

.social-icons .fab {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    font-size: 20px;
    color: #000;
    background: #fff;
    margin-right: 15px;
    cursor: pointer;
}

hr {
    width: 90%;
    border: 0;
    border-bottom: 1px solid #ccc;
    margin: 20px auto;
}

.copyright {
    text-align: center;
}

.underline {
    width: 100%;
    height: 5px;
    background: #767676;
    border-radius: 3px;
    position: absolute;
    top: 25px;
    left: 0;
}

.underline span {
    width: 15px;
    height: 100%;
    background: #fff;
    border-radius: 3px;
    position: absolute;
    top: 0;
    left: 10px;
    animation: moving 2s linear infinite
}

@keyframes moving {
    0% {
        left: -20px;
    }
    100% {
        left: 100%;
    }
}

@media (max-width: 700px){
    footer {
        bottom: unset;
    }

    .col {
        flex-basis: 100%;
    }
    
    .col:nth-child(2),
    .col:nth-child(3) {
        flex-basis: 100%
    }
}
    </style>

    <footer>
        <div class="row">
            
            <div class="col">
            <img src="./logo.png" class="logo">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam alias architecto tempore, veritatis nihil ullam tempora possimus nobis rem porro, at perspiciatis nesciunt maiores!</p>
            </div>

            <div class="col">
                <h3>Office <div class="underline"><span></span></div></h3>
                <!-- <p>ITPL Road</p>
                <p>Whitefield, Bangalore</p> -->
                <p>purnea university </p>
                <!-- <p class="email-id">abc@example.com</p> -->
                <!-- <h4>+091-0123456789</h4> -->
            </div>

            <div class="col">
                <h3>Links <div class="underline"><span></span></div></h3>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="/contact">Contacts</a></li>
                </ul>
            </div>

            <div class="col">
                <h3>Newsletter <div class="underline"><span></span></div></h3>
                <form>
                    <i class="far fa-envelope"></i>
                    <input type="email" placeholder="Enter your email id" required>
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>

                <div class="social-icons">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-whatsapp"></i>
                    <i class="fab fa-pinterest"></i>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">Easy Tutorials 2021 - All Rights Reserved</p>
    </footer>

    