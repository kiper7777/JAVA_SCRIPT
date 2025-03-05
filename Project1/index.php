<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profitrade</title>
    <link rel="stylesheet" href="styles.css">
      <style>
    </style>
</head>

<body>
    <?php include "header.php" ; 
    ?>

    <!-- <header>
        <div class="container">
            <div class="logo-nav">
                <div class="logo">
                    <a href="index.html">
                        <img src="/image/logo.png" alt="Profitrade Logo">
                    </a>
                </div>

                <div class="burger" id="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <nav class="menu" id="menu">
                    <ul>
                        <li><a href="/pricepolicy.html">Price Policy</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Join our Discord</a></li>
                    </ul>
                </nav>
            </div>
            <div class="auth-buttons">
                <button class="login" id="loginButton">Log in</button>
                <button class="signup" id="signupButton">Sign up</button>
            </div>
        </div>
    </header> -->

    <main>
        <section class="hero">
            <h1>Open new horizons of income and realize your financial potential.</h1>
            <p>Master the art of trading by learning how to manage risk and you will increase your trading capital to £1 million.</p>

            <form class="form">
                <input type="email" placeholder="yourmail@gmail.com" required>
                <button type="submit">Start a career</button>
            </form>

            <div class="reviews">
                <span>Excellent</span>
                <img class="stars" src="image\stars.png" alt="">
                <span class="rev">370 reviews on</span>
                <div class="trustpilot">
                    <img class="star" src="image\star.png" alt="">
                    <span>Trustpilot</span>
                </div>
            </div>
        </section>

        <section class="video-container">
            <video controls autoplay muted loop>
                <source src="video/chart.mp4" type="video/mp4">
            </video>
            <img src="image/logo1.png" alt="Logo" class="video-logo">
        </section>

        <section class="tools">
            <h2>Who we work with</h2>
            <p>Tools of the trade</p>
            <div class="tools-logos">
                <img src="image/ninjatrader.png" alt="NinjaTrader">
                <img src="image/rithmic.png " alt="Rithmic">

                <img src="image/tradovate.png" alt="Tradovate ">
                <img src="image/tradingview.png" alt="TradingView">
            </div>
        </section>

        <section class="plans">
            <h2>Select your plan</h2>
            <p>Dive into trading, start with skills that will help you grow.</p>
            <div class="plans-buttons">
                <button class="plans-button">Beginner</button>
                <button class="plans-button">Advanced</button>
                <button class="plans-button-active">Funded Account</button>
            </div>
            <div class="plan-cards">
                <div class="card">
                    <div class="card-header">
                        <h3>£25k account</h3>
                        <div class="card-header-footer">
                            <img src="image/coins.png" alt="">
                            <p>Funded Account</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p><strong>£299</strong> one time fee</p>
                        <div>Profit Target: <strong>None - You’re Funded!</strong></div>
                        <div>Max Contracts: 1 Minis (10 Micros)</div>
                        <div>Daily Loss Limit (Soft Breach): None</div>
                        <div>Trailing Max Drawndown: £1000</div>
                        <div>Drawndown Mode: End of Day</div>
                        <div>Min Trading Days to Payout: 10</div>
                        <div>Consistency: 20%</div>
                        <div>Max Accounts: 5</div>
                        <button>Choose £25k plan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>£50k account</h3>
                        <div class="card-header-footer">
                            <img src="image/coins.png" alt="">
                            <p>Funded Account</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p><strong>£549</strong> one time fee</p>
                        <div>Profit Target: <strong>None - You’re Funded!</strong></div>
                        <div>Max Contracts: 3 Minis (30 Micros)</div>
                        <div>Daily Loss Limit (Soft Breach): £1250</div>
                        <div>Trailing Max Drawndown: £2500</div>
                        <div>Drawndown Mode: End of Day</div>
                        <div>Min Trading Days to Payout: 10</div>
                        <div>Consistency: 20%</div>
                        <div>Max Accounts: 5</div>
                        <button>Choose £50k plan</button>
                    </div>

                </div>

                <div class="card">
                    <div class="card-header">
                        <h3>£100k account</h3>
                        <div class="card-header-footer">
                            <img src="image/coins.png" alt="">
                            <p>Funded Account</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p><strong>£999</strong> one time fee</p>
                        <div>Profit Target: <strong>None - You’re Funded!</strong></div>
                        <div>Max Contracts: 3 Minis (30 Micros)</div>
                        <div>Daily Loss Limit (Soft Breach): £1250</div>
                        <div>Trailing Max Drawndown: £2500</div>
                        <div>Drawndown Mode: End of Day</div>
                        <div>Min Trading Days to Payout: 10</div>
                        <div>Consistency: 20%</div>
                        <div>Max Accounts: 5</div>
                        <button>Choose £100k plan</button>
                    </div>

                </div>
            </div>
        </section>

        <section class="career">
            <h1>Start your career as a funded trader</h1>
            <form class="career-form">
                <input type="email" placeholder="yourmail@gmail.com" required>
                <button type="submit">Start a career</button>
            </form>
        </section>

        <section class="faq">
            <h2>Frequently asked questions</h2>
            <div class="questions">
                <ul>
                    <div class="list">
                        <li>1. What is Profitrade?</li>
                        <span>+</span>
                    </div>
                    <div class="list">
                        <li>2. What are the rules?</li>
                        <span>+</span>
                    </div>
                    <div class="list">
                        <li>3. How long do I need to trade before I pass?</li>
                        <span>+</span>
                    </div>
                    <div class="list">
                        <li>4. What happens if I hit my drawdown?</li>
                        <span>+</span>
                    </div>
                    <div class="list">
                        <li>5. What is a Sim Funded Account?</li>
                        <span>+</span>
                    </div>
                    <div class="list">
                        <li>6. How many Sim Funded Accounts can I have?</li>
                        <span>+</span>
                    </div>
                    <div class="list">
                        <li>7. How do I get paid?</li>
                        <span>+</span>
                    </div>
                    <div class="list">
                        <li>8. What are the Funded Account Rules?</li>
                        <span>+</span>
                    </div>
                </ul>
                <img src="image/questions.png" alt="">
            </div>
        </section>

        <section class="contact">
            <h2>Do you have questions that are not listed above? Send us a message and we will contact you shortly</h2>
            <button>
                <img src="image/email.png" alt="">
                <span>Contact Us</span>
            </button>
        </section>
    </main>
 
    <?php include "footer.php" ; 
    ?>
    <!-- <footer>
        <div class="footer-container">
            <div class="footer-column">
                <img src="/image/logo.png" alt="Profitrade Logo">
            </div>
            <div class="footer-column">
                <h3>Profitrade</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Price Policy</a></li>
                    <li><a href="#">Become an Affiliate</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Resources</h3>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Funded Trader Agreement</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contact</h3>
                <p>Email: <a href="mailto:info@profitrade.com">info@profitrade.com</a></p>
                <p>Support: <a href="mailto:support@profitrade.com">support@profitrade.com</a></p>
            </div>
        </div>
        <div class="footer-disclaimer">
            <p>
                Website Disclaimers
                Profitrade Ltd. (“We”, “Our”, “Us”, or “Company”) operates as a proprietary trading firm. The Company is
                not a custodian, exchange, financial institution, trading platform, fiduciary or insurance business
                outside the purview of financial regulatory authorities. “Profitrade” is a brand name operated by the
                Company.
                All trading activities conducted through the Company Hub are executed in a simulated environment. Users
                should be aware that the trading results in this environment do not reflect real trading outcomes. The
                simulated trading environment in the Hub is designed for educational and evaluation purposes only. The
                “funds” provided to you for the evaluation are fictitious, do not represent any currency, and that you
                have no right to possess those fictitious funds beyond the scope of their use within the Hub and for the
                sole purpose of the evaluation, and in particular that they may not and cannot be used for any actual
                trading and that you are not entitled to any payment or other right in or of those funds.
                Becoming a funded user is not guaranteed. The eligibility for becoming a funded user is contingent upon
                meeting specific performance criteria and compliance with the Company’s evaluation processes. Not all
                users will qualify for funded accounts, and past performance in the simulated environment is not
                indicative of future success.
                All content published and distributed by Us and Our affiliates is to be treated as general information
                only. None of the information provided contained herein is intended as (a) investment advice, (b) an
                offer or solicitation of an offer to buy or sell, or (c) a recommendation, endorsement, or sponsorship
                of any security, company, or fund. Testimonials appearing on the website may not be representative of
                other clients or customers and is not a guarantee of future performance or success. Use of the
                information contained on the website is at your own risk and the Company and its partners,
                representatives, agents, employees, and contractors assume no responsibility or liability for any use or
                misuse of such information.
                Hypothetical or simulated performance results have certain limitations. Unlike an actual performance
                record, simulated results do not represent actual trading. Also, because the trades have not actually
                been executed, the results may have under-or-over compensated for the impact, if any, of certain market
                factors, such as lack of liquidity. Simulated trading programs, in general, are also subject to the fact
                that they are designed with the benefit of hindsight. No representation is being made that any account
                will or is likely to achieve profit or losses similar to those shown.
                This website is operated by PROFITRADE LIMITED, a company registered in England and Wales with company
                number 123456789 and registered office at 7 Hight Street, London, W1 7SL, United Kingdom.
                PROFITRADE LIMITED – Copyright © 2024.
            </p>
        </div>
    </footer> -->

    <script src="script.js">
    </script>
</body>

</html>