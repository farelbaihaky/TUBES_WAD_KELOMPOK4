<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/vars.css" />
    <link rel="stylesheet" href="assets/css/Home.css" />

    <style>
      a,
      button,
      input,
      select,
      h1,
      h2,
      h3,
      h4,
      h5,
      * {
        margin: 0;
        padding: 0;
        border: none;
        text-decoration: none;
        appearance: none;
        background: none;

        -webkit-font-smoothing: antialiased;
      }
    </style>
    <title>Document</title>
  </head>
  <body>
    <div class="home">
      <div class="navigation-home">
        <div class="home2">
          <span>
          <div class="home-2-span" onclick="window.location.href='{{ route('Home') }}'" style="cursor: pointer;">
    Home
</div>
            <span class="home-2-span2"></span>
          </span>
        </div>
        <div class="consultation" onclick="window.location.href='{{ route('Chat') }}'" style="cursor: pointer;">
    Consultation
</div>
<div class="counselor-profile" onclick="window.location.href='{{ route('Counselor1') }}'" style="cursor: pointer;">
    Counselor Profile
</div>
<div class="history" onclick="window.location.href='{{ route('History') }}'" style="cursor: pointer;">
    History
</div>
        <div class="contact">Contact</div>
        <img class="logo-menial" src="assets/img/Home/logo-menial0.png" />
      </div>
      <div class="footer-home">
        <div class="frame"></div>
        <div class="address">
          <div
            class="jl-telekomunikasi-1-terusan-buahbatu-bojongsoang-telkom-university-sukapura-kec-dayeuhkolot-kabupaten-bandung-jawa-barat-40257"
          >
            Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom
            University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa
            Barat 40257
          </div>
          <div class="address2">Address</div>
        </div>
        <div class="copyright-2023-menial">Copyright ©️2023 Menial</div>
        <div class="social-media">
          <div class="social-media2">Social Media</div>
          <svg
            class="instagram"
            width="47"
            height="46"
            viewBox="0 0 47 46"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M15.2748 3.83325H31.7248C37.9915 3.83325 43.0832 8.81659 43.0832 14.9499V31.0499C43.0832 33.9982 41.8865 36.8258 39.7564 38.9106C37.6263 40.9954 34.7373 42.1666 31.7248 42.1666H15.2748C9.00817 42.1666 3.9165 37.1833 3.9165 31.0499V14.9499C3.9165 12.0016 5.11318 9.17403 7.24328 7.08925C9.37338 5.00447 12.2624 3.83325 15.2748 3.83325ZM14.8832 7.66659C13.0134 7.66659 11.2202 8.39355 9.89807 9.68755C8.57594 10.9815 7.83317 12.7366 7.83317 14.5666V31.4333C7.83317 35.2474 10.9861 38.3333 14.8832 38.3333H32.1165C33.9863 38.3333 35.7795 37.6063 37.1016 36.3123C38.4237 35.0183 39.1665 33.2632 39.1665 31.4333V14.5666C39.1665 10.7524 36.0136 7.66659 32.1165 7.66659H14.8832ZM33.7811 10.5416C34.4303 10.5416 35.053 10.794 35.512 11.2433C35.9711 11.6926 36.229 12.302 36.229 12.9374C36.229 13.5728 35.9711 14.1822 35.512 14.6315C35.053 15.0808 34.4303 15.3333 33.7811 15.3333C33.1319 15.3333 32.5092 15.0808 32.0501 14.6315C31.5911 14.1822 31.3332 13.5728 31.3332 12.9374C31.3332 12.302 31.5911 11.6926 32.0501 11.2433C32.5092 10.794 33.1319 10.5416 33.7811 10.5416ZM23.4998 13.4166C26.0967 13.4166 28.5873 14.4263 30.4236 16.2235C32.2599 18.0207 33.2915 20.4583 33.2915 22.9999C33.2915 25.5416 32.2599 27.9791 30.4236 29.7764C28.5873 31.5736 26.0967 32.5833 23.4998 32.5833C20.9029 32.5833 18.4124 31.5736 16.5761 29.7764C14.7398 27.9791 13.7082 25.5416 13.7082 22.9999C13.7082 20.4583 14.7398 18.0207 16.5761 16.2235C18.4124 14.4263 20.9029 13.4166 23.4998 13.4166ZM23.4998 17.2499C21.9417 17.2499 20.4474 17.8557 19.3456 18.9341C18.2438 20.0124 17.6248 21.4749 17.6248 22.9999C17.6248 24.5249 18.2438 25.9874 19.3456 27.0658C20.4474 28.1441 21.9417 28.7499 23.4998 28.7499C25.058 28.7499 26.5523 28.1441 27.6541 27.0658C28.7559 25.9874 29.3748 24.5249 29.3748 22.9999C29.3748 21.4749 28.7559 20.0124 27.6541 18.9341C26.5523 17.8557 25.058 17.2499 23.4998 17.2499Z"
              fill="white"
            />
          </svg>

          <svg
            class="youtube"
            width="46"
            height="47"
            viewBox="0 0 46 47"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M19.1668 29.3751L29.1143 23.5001L19.1668 17.6251V29.3751ZM41.3235 14.0413C41.5727 14.9617 41.7452 16.1955 41.8602 17.7622C41.9943 19.3288 42.0518 20.6801 42.0518 21.8551L42.1668 23.5001C42.1668 27.7888 41.8602 30.9417 41.3235 32.9588C40.8443 34.7213 39.7327 35.8572 38.0077 36.3467C37.1068 36.6013 35.4585 36.7776 32.9285 36.8951C30.4368 37.0322 28.156 37.0909 26.0477 37.0909L23.0002 37.2084C14.9693 37.2084 9.96683 36.8951 7.99266 36.3467C6.26766 35.8572 5.156 34.7213 4.67683 32.9588C4.42766 32.0384 4.25516 30.8047 4.14016 29.238C4.006 27.6713 3.9485 26.3201 3.9485 25.1451L3.8335 23.5001C3.8335 19.2113 4.14016 16.0584 4.67683 14.0413C5.156 12.2788 6.26766 11.143 7.99266 10.6534C8.8935 10.3988 10.5418 10.2226 13.0718 10.1051C15.5635 9.968 17.8443 9.90925 19.9527 9.90925L23.0002 9.79175C31.031 9.79175 36.0335 10.1051 38.0077 10.6534C39.7327 11.143 40.8443 12.2788 41.3235 14.0413Z"
              fill="white"
            />
          </svg>

          <svg
            class="facebook"
            width="36"
            height="37"
            viewBox="0 0 36 37"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_141_259)">
              <path
                d="M35.9996 18.6132C35.9996 8.33181 27.9401 -0.00244141 17.9996 -0.00244141C8.05462 -0.000128906 -0.00488281 8.33181 -0.00488281 18.6155C-0.00488281 27.9048 6.57862 35.6054 15.1826 37.0022V23.9944H10.6151V18.6155H15.1871V14.5108C15.1871 9.8465 17.8759 7.27037 21.9866 7.27037C23.9576 7.27037 26.0164 7.63343 26.0164 7.63343V12.2122H23.7461C21.5119 12.2122 20.8144 13.6482 20.8144 15.1213V18.6132H25.8049L25.0084 23.9921H20.8121V36.9999C29.4161 35.6031 35.9996 27.9025 35.9996 18.6132Z"
                fill="white"
              />
            </g>
            <defs>
              <clipPath id="clip0_141_259">
                <rect width="36" height="37" fill="white" />
              </clipPath>
            </defs>
          </svg>

          <div class="line">
            <svg
              class="group"
              width="46"
              height="47"
              viewBox="0 0 46 47"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M7.66683 22.5208C7.66683 15.8096 14.1892 9.79167 23.0002 9.79167C31.8111 9.79167 38.3335 15.8096 38.3335 22.5208C38.3335 25.8206 36.5817 29.0088 33.4441 31.9541C30.8182 34.4177 27.3472 36.5836 23.5464 38.3422C23.4363 37.4993 23.1357 36.6941 22.6686 35.9902C21.9728 34.9817 20.9052 34.2924 19.4965 34.0397C12.3339 32.7629 7.66683 28.2 7.66683 22.5208ZM23.0002 5.875C12.7575 5.875 3.8335 13.0092 3.8335 22.5208C3.8335 30.8242 10.6357 36.4367 18.8372 37.8977C19.5406 38.023 19.7169 38.4577 19.7821 39.1412C19.8722 40.0538 19.6767 41.029 20.0753 41.8829C20.5526 42.9051 21.7294 43.3614 22.7529 42.9423C27.6807 40.9292 32.457 38.1973 36.0354 34.8388C39.6062 31.49 42.1668 27.3325 42.1668 22.5208C42.1668 13.0092 33.2428 5.875 23.0002 5.875ZM23.5138 18.33C23.2616 18.021 22.9224 17.7989 22.5423 17.6938C22.1622 17.5888 21.7597 17.6059 21.3894 17.7428C21.0192 17.8798 20.6992 18.1299 20.473 18.4592C20.2468 18.7885 20.1253 19.181 20.1252 19.5833V25.4583C20.1252 25.9777 20.3271 26.4758 20.6865 26.8431C21.046 27.2103 21.5335 27.4167 22.0418 27.4167C22.5502 27.4167 23.0377 27.2103 23.3971 26.8431C23.7566 26.4758 23.9585 25.9777 23.9585 25.4583V24.9922L25.3615 26.7117C25.6137 27.0207 25.9529 27.2428 26.333 27.3478C26.7131 27.4529 27.1156 27.4358 27.4859 27.2989C27.8561 27.1619 28.1761 26.9118 28.4023 26.5825C28.6285 26.2532 28.75 25.8607 28.7502 25.4583V19.5833C28.7502 19.064 28.5482 18.5658 28.1888 18.1986C27.8293 17.8313 27.3418 17.625 26.8335 17.625C26.3252 17.625 25.8377 17.8313 25.4782 18.1986C25.1188 18.5658 24.9168 19.064 24.9168 19.5833V20.0494L23.5138 18.33ZM13.4168 19.5833C13.4168 19.064 13.2149 18.5658 12.8555 18.1986C12.496 17.8313 12.0085 17.625 11.5002 17.625C10.9918 17.625 10.5043 17.8313 10.1449 18.1986C9.78543 18.5658 9.5835 19.064 9.5835 19.5833V25.4583C9.5835 25.9777 9.78543 26.4758 10.1449 26.8431C10.5043 27.2103 10.9918 27.4167 11.5002 27.4167H13.4168C13.9252 27.4167 14.4127 27.2103 14.7721 26.8431C15.1316 26.4758 15.3335 25.9777 15.3335 25.4583C15.3335 24.9389 15.1316 24.4408 14.7721 24.0736C14.4127 23.7063 13.9252 23.5 13.4168 23.5V19.5833ZM17.2502 17.625C17.7585 17.625 18.246 17.8313 18.6054 18.1986C18.9649 18.5658 19.1668 19.064 19.1668 19.5833V25.4583C19.1668 25.9777 18.9649 26.4758 18.6054 26.8431C18.246 27.2103 17.7585 27.4167 17.2502 27.4167C16.7418 27.4167 16.2543 27.2103 15.8949 26.8431C15.5354 26.4758 15.3335 25.9777 15.3335 25.4583V19.5833C15.3335 19.064 15.5354 18.5658 15.8949 18.1986C16.2543 17.8313 16.7418 17.625 17.2502 17.625ZM34.5002 21.5417H34.2433C34.4125 21.839 34.5016 22.1769 34.5016 22.5208C34.5016 22.8648 34.4125 23.2026 34.2433 23.5H34.5002C35.0085 23.5 35.496 23.7063 35.8554 24.0736C36.2149 24.4408 36.4168 24.9389 36.4168 25.4583C36.4168 25.9777 36.2149 26.4758 35.8554 26.8431C35.496 27.2103 35.0085 27.4167 34.5002 27.4167H31.6252C31.1168 27.4167 30.6293 27.2103 30.2699 26.8431C29.9104 26.4758 29.7085 25.9777 29.7085 25.4583V19.5833C29.7085 19.064 29.9104 18.5658 30.2699 18.1986C30.6293 17.8313 31.1168 17.625 31.6252 17.625H34.5002C35.0085 17.625 35.496 17.8313 35.8554 18.1986C36.2149 18.5658 36.4168 19.064 36.4168 19.5833C36.4168 20.1027 36.2149 20.6008 35.8554 20.9681C35.496 21.3353 35.0085 21.5417 34.5002 21.5417Z"
                fill="white"
              />
            </svg>
          </div>
        </div>
        <div class="line-footer"></div>
        <img src="assets/img/Home/logo-menial-20.png" />
      </div>
      <div class="testimonial">
        <div class="rectangle"></div>
        <div class="text-testimonial">
          <div class="testimonials">TESTIMONIALS</div>
          <div
            class="lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-ut-elit-tellus-luctus-nec-ullamcorper-mattis-pulvinar-dapibus-leo"
          >
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            <br />
            Ut elit tellus, luctus nec ullamcorper mattis,
            <br />
            pulvinar dapibus leo.
          </div>
          <div class="what-they-re-talking-about-menial">
            What They’re Talking About Menial?
          </div>
        </div>
        <div class="testimonial-2">
          <div class="rectangle2"></div>
          <div class="text-testimonial-2">
            <div
              class="diam-vulputate-ut-pharetra-sit-amet-aliquam-libero-enim-sed-faucibus-turpis-sed-viverra-tellus-in-hac-habitasse-platea-dictumst-normal-that-has"
            >
              Diam vulputate ut pharetra sit amet
              <br />
              aliquam. Libero enim sed faucibus turpis.
              <br />
              Sed viverra tellus in hac habitasse platea
              <br />
              dictumst. Normal that has…
            </div>
          </div>
          <svg
            class="quote-icon-2"
            width="81"
            height="76"
            viewBox="0 0 81 76"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_11_195)">
              <path
                d="M24.6473 20.1138L22.6132 17.145C8.53944 26.1249 0.720703 37.0356 0.720703 46.0155C0.720703 54.6985 7.44607 58.7811 13.1531 58.7811C20.3464 58.7811 25.4279 52.9909 25.4279 46.9061C25.4279 41.7856 21.9877 37.4061 17.374 35.7721C16.0454 35.3256 14.7944 34.9551 14.7944 32.8034C14.7944 30.0579 16.9061 25.9776 24.6473 20.1138ZM55.6871 20.1138L53.6529 17.145C39.7343 26.1249 31.7605 37.0356 31.7605 46.0155C31.7605 54.6985 38.641 58.7811 44.348 58.7811C51.6188 58.7811 56.7804 52.9909 56.7804 46.9061C56.7804 41.7856 53.2626 37.4061 48.4913 35.7721C47.1628 35.3256 45.9893 34.9551 45.9893 32.8034C45.9893 30.0579 48.1786 25.9753 55.6846 20.1114L55.6871 20.1138Z"
                fill="#41A2E8"
              />
            </g>
            <defs>
              <clipPath id="clip0_11_195">
                <rect
                  width="80.0639"
                  height="76"
                  fill="white"
                  transform="translate(0.720703)"
                />
              </clipPath>
            </defs>
          </svg>

          <svg
            class="polygon-2"
            width="37"
            height="14"
            viewBox="0 0 37 14"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M18.3224 14L36.569 0.5H0.0757008L18.3224 14Z"
              fill="white"
            />
          </svg>
          
          <div class="darwin-nunez">Darwin Nunez</div>
          <div class="flopp-player">Flopp Player</div>
          <img class="darwin-nunez2" src="assets/img/Home/darwin-nunez1.png" />
        </div>
        <div class="testimonial-1">
          <div class="rectangle3"></div>
          <div class="text-testimonial2">
            <div
              class="diam-vulputate-ut-pharetra-sit-amet-aliquam-libero-enim-sed-faucibus-turpis-sed-viverra-tellus-in-hac-habitasse-platea-dictumst-normal-that-has2"
            >
              Diam vulputate ut pharetra sit amet
              <br />
              aliquam. Libero enim sed faucibus turpis.
              <br />
              Sed viverra tellus in hac habitasse platea
              <br />
              dictumst. Normal that has…
            </div>
          </div>
          <svg
            class="quote-icon"
            width="81"
            height="76"
            viewBox="0 0 81 76"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_11_184)">
              <path
                d="M24.306 20.1138L22.2719 17.145C8.19813 26.1249 0.379395 37.0356 0.379395 46.0155C0.379395 54.6985 7.10476 58.7811 12.8118 58.7811C20.0051 58.7811 25.0866 52.9909 25.0866 46.9061C25.0866 41.7856 21.6464 37.4061 17.0327 35.7721C15.7041 35.3256 14.4531 34.9551 14.4531 32.8034C14.4531 30.0579 16.5648 25.9776 24.306 20.1138ZM55.3458 20.1138L53.3116 17.145C39.393 26.1249 31.4192 37.0356 31.4192 46.0155C31.4192 54.6985 38.2997 58.7811 44.0067 58.7811C51.2775 58.7811 56.4391 52.9909 56.4391 46.9061C56.4391 41.7856 52.9213 37.4061 48.15 35.7721C46.8215 35.3256 45.648 34.9551 45.648 32.8034C45.648 30.0579 47.8373 25.9753 55.3433 20.1114L55.3458 20.1138Z"
                fill="#41A2E8"
              />
            </g>
            <defs>
              <clipPath id="clip0_11_184">
                <rect
                  width="80.0639"
                  height="76"
                  fill="white"
                  transform="translate(0.379395)"
                />
              </clipPath>
            </defs>
          </svg>

          <svg
            class="polygon"
            width="38"
            height="14"
            viewBox="0 0 38 14"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M18.9811 14L37.2277 0.5H0.734392L18.9811 14Z"
              fill="white"
            />
          </svg>

          <div class="jurgen-klopp">Jurgen Klopp</div>
          <div class="football-coach">Football Coach</div>
          <img class="jurgen-klopp2" src="assets/img/Home/jurgen-klopp1.png" />
        </div>
      </div>
      <div class="our-team">
        <div class="text-team">
          <div class="our-team2">Our Team</div>
          <div
            class="lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-ut-elit-tellus-luctus-nec-ullamcorper-mattis-pulvinar-dapibus-leo2"
          >
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
            tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
          </div>
          <div class="lets-meet-with-our-professionals-counsellor-profiles">
            Lets Meet With Our Professionals Counsellor Profiles
          </div>
        </div>
        <div class="card-team">
          <div class="card-background">
            <div class="rectangle4"></div>
            <img class="amilia-agata" src="assets/img/Home/amilia-agata0.png" />
          </div>
          <div class="linear"></div>
          <div class="text-card">
            <div class="dr-amilia-agata">Dr. Amilia Agata</div>
            <div class="clinical-psychologist-hypnotherapist">
              Clinical Psychologist, Hypnotherapist
            </div>
            <div
              class="sit-nam-urna-lobortis-cubilia-feugiat-sagittis-letius-netus-dignissim-pharetra-facilisi-malesuada"
            >
              Sit nam urna lobortis cubilia feugiat sagittis letius.
              <br />
              Netus dignissim pharetra facilisi malesuada...
            </div>
          </div>
          <div class="line-card"></div>
        </div>
        <div class="card-team-2">
          <div class="card-background-2">
            <div class="rectangle-14"></div>
            <img class="farel-baihaky" src="assets/img/Home/farel-baihaky0.png" />
          </div>
          <div class="linear-2"></div>
          <div class="text-card-2">
            <div class="dr-farel-baihaky">Dr. Farel Baihaky</div>
            <div class="clinical-psychologist-hypnotherapist2">
              Clinical Psychologist, Hypnotherapist
            </div>
            <div
              class="sit-nam-urna-lobortis-cubilia-feugiat-sagittis-letius-netus-dignissim-pharetra-facilisi-malesuada2"
            >
              Sit nam urna lobortis cubilia feugiat sagittis letius.
              <br />
              Netus dignissim pharetra facilisi malesuada...
            </div>
          </div>
          <div class="line-card-2"></div>
        </div>
        <div class="card-team-3">
          <div class="card-background-3">
            <div class="rectangle-142"></div>
            <img class="nabila" src="assets/img/Home/nabila0.png" />
          </div>
          <div class="linear-3"></div>
          <div class="text-card-3">
            <div class="dr-nabila">Dr. Nabila</div>
            <div class="clinical-psychologist-hypnotherapist3">
              Clinical Psychologist, Hypnotherapist
            </div>
            <div
              class="sit-nam-urna-lobortis-cubilia-feugiat-sagittis-letius-netus-dignissim-pharetra-facilisi-malesuada3"
            >
              Sit nam urna lobortis cubilia feugiat sagittis letius.
              <br />
              Netus dignissim pharetra facilisi malesuada...
            </div>
          </div>
          <div class="line-card-3"></div>
        </div>
        <div class="card-team-4">
          <div class="card-background-4">
            <div class="rectangle-143"></div>
            <img class="humam" src="assets/img/Home/humam0.png" />
          </div>
          <div class="linear-4"></div>
          <div class="text-card-4">
            <div class="dr-humam">Dr. Humam</div>
            <div class="clinical-psychologist-hypnotherapist4">
              Clinical Psychologist, Hypnotherapist
            </div>
            <div
              class="sit-nam-urna-lobortis-cubilia-feugiat-sagittis-letius-netus-dignissim-pharetra-facilisi-malesuada4"
            >
              Sit nam urna lobortis cubilia feugiat sagittis letius.
              <br />
              Netus dignissim pharetra facilisi malesuada...
            </div>
          </div>
          <div class="line-card-4"></div>
        </div>
        <div class="button-team">
          <div class="rectangle-3"></div>
          <svg
            class="right-arrow-svgrepo-com-1-4"
            width="20"
            height="21"
            viewBox="0 0 20 21"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M10.2441 16.9226C10.5695 17.248 11.0972 17.248 11.4226 16.9226L17.2559 11.0892C17.5813 10.7638 17.5813 10.2361 17.2559 9.91071L11.4226 4.07738C11.0972 3.75196 10.5695 3.75196 10.2441 4.07738C9.91867 4.40279 9.91867 4.93046 10.2441 5.25588L14.6548 9.66663H3.33333C2.8731 9.66663 2.5 10.0397 2.5 10.5C2.5 10.9602 2.8731 11.3333 3.33333 11.3333H14.6548L10.2441 15.744C9.91867 16.0695 9.91867 16.5971 10.2441 16.9226Z"
              fill="white"
            />
          </svg>

          <div class="meet-all-counsellor">Meet All Counsellor</div>
        </div>
      </div>
      <div class="service">
        <div class="card-service">
          <div class="rectangle5"></div>
          <div class="get-treatment-for-all-your-mental-healthcare-needs">
            Get treatment for all your
            <br />
            mental healthcare needs.
          </div>
          <div class="our-services">Our Services</div>
          <div class="button-service">
            <div class="rectangle-6"></div>
            <div class="see-all-services">See All Services</div>
            <svg
              class="right-arrow-svgrepo-com-1-1"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12.2929 4.29289C12.6834 3.90237 13.3166 3.90237 13.7071 4.29289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L13.7071 19.7071C13.3166 20.0976 12.6834 20.0976 12.2929 19.7071C11.9024 19.3166 11.9024 18.6834 12.2929 18.2929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L12.2929 5.70711C11.9024 5.31658 11.9024 4.68342 12.2929 4.29289Z"
                fill="white"
              />
            </svg>
          </div>
        </div>
        <div class="card-pahami">
          <div class="card-background2">
            <div class="rectangle6"></div>
            <img class="pahami-dirimu" src="assets/img/Home/pahami-dirimu0.png" />
          </div>
          <div class="button-pahami">
            <div class="rectangle7"></div>
            <div class="pahami-dirimu2">Pahami dirimu</div>
            <div class="button-arrow">
              <div class="ellipse-1"></div>
              <svg
                class="right-arrow-svgrepo-com-1-2"
                width="25"
                height="24"
                viewBox="0 0 25 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M12.7929 4.29289C13.1834 3.90237 13.8166 3.90237 14.2071 4.29289L21.2071 11.2929C21.5976 11.6834 21.5976 12.3166 21.2071 12.7071L14.2071 19.7071C13.8166 20.0976 13.1834 20.0976 12.7929 19.7071C12.4024 19.3166 12.4024 18.6834 12.7929 18.2929L18.0858 13H4.5C3.94772 13 3.5 12.5523 3.5 12C3.5 11.4477 3.94772 11 4.5 11H18.0858L12.7929 5.70711C12.4024 5.31658 12.4024 4.68342 12.7929 4.29289Z"
                  fill="white"
                />
              </svg>
            </div>
          </div>
        </div>
        <div class="card-berbagi">
          <div class="card-background-32">
            <div class="rectangle6"></div>
            <img class="berbagi-cerita" src="assets/img/Home/berbagi-cerita0.png" />
          </div>
          <div class="button-berbagi">
            <div class="rectangle7"></div>
            <div class="berbagi-cerita2">Berbagi Cerita</div>
            <div class="button-arrow-3">
              <div class="ellipse-1"></div>
              <svg
                class="right-arrow-svgrepo-com-1-22"
                width="25"
                height="24"
                viewBox="0 0 25 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M12.7929 4.29289C13.1834 3.90237 13.8166 3.90237 14.2071 4.29289L21.2071 11.2929C21.5976 11.6834 21.5976 12.3166 21.2071 12.7071L14.2071 19.7071C13.8166 20.0976 13.1834 20.0976 12.7929 19.7071C12.4024 19.3166 12.4024 18.6834 12.7929 18.2929L18.0858 13H4.5C3.94772 13 3.5 12.5523 3.5 12C3.5 11.4477 3.94772 11 4.5 11H18.0858L12.7929 5.70711C12.4024 5.31658 12.4024 4.68342 12.7929 4.29289Z"
                  fill="white"
                />
              </svg>
            </div>
          </div>
        </div>
        <div class="card-schedule">
          <div class="card-background-42">
            <div class="rectangle6"></div>
            <img class="schedule" src="assets/img/Home/schedule0.png" />
          </div>
          <div class="button-schedule">
            <div class="rectangle-8"></div>
            <div class="schedule2">Schedule</div>
            <div class="button-arrow-4">
              <div class="ellipse-1"></div>
              <svg
                class="right-arrow-svgrepo-com-1-23"
                width="25"
                height="24"
                viewBox="0 0 25 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M12.7929 4.29289C13.1834 3.90237 13.8166 3.90237 14.2071 4.29289L21.2071 11.2929C21.5976 11.6834 21.5976 12.3166 21.2071 12.7071L14.2071 19.7071C13.8166 20.0976 13.1834 20.0976 12.7929 19.7071C12.4024 19.3166 12.4024 18.6834 12.7929 18.2929L18.0858 13H4.5C3.94772 13 3.5 12.5523 3.5 12C3.5 11.4477 3.94772 11 4.5 11H18.0858L12.7929 5.70711C12.4024 5.31658 12.4024 4.68342 12.7929 4.29289Z"
                  fill="white"
                />
              </svg>
            </div>
          </div>
        </div>
        <div class="card-meditation">
          <div class="card-background-5">
            <div class="rectangle6"></div>
            <img class="meditaion" src="assets/img/Home/meditaion0.png" />
          </div>
          <div class="button-meditation">
            <div class="rectangle7"></div>
            <div class="meditation">Meditation</div>
            <div class="button-arrow-5">
              <div class="ellipse-1"></div>
              <svg
                class="right-arrow-svgrepo-com-1-24"
                width="25"
                height="24"
                viewBox="0 0 25 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M12.7929 4.29289C13.1834 3.90237 13.8166 3.90237 14.2071 4.29289L21.2071 11.2929C21.5976 11.6834 21.5976 12.3166 21.2071 12.7071L14.2071 19.7071C13.8166 20.0976 13.1834 20.0976 12.7929 19.7071C12.4024 19.3166 12.4024 18.6834 12.7929 18.2929L18.0858 13H4.5C3.94772 13 3.5 12.5523 3.5 12C3.5 11.4477 3.94772 11 4.5 11H18.0858L12.7929 5.70711C12.4024 5.31658 12.4024 4.68342 12.7929 4.29289Z"
                  fill="white"
                />
              </svg>
            </div>
          </div>
        </div>
        <div class="card-self">
          <div class="card-background-22">
            <div class="rectangle6"></div>
            <img class="self-care" src="assets/img/Home/self-care0.png" />
          </div>
          <div class="button-self">
            <div class="rectangle7"></div>
            <div class="self-care2">Self Care</div>
            <div class="button-arrow-2">
              <div class="ellipse-2"></div>
              <svg
                class="right-arrow-svgrepo-com-1-3"
                width="25"
                height="24"
                viewBox="0 0 25 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M12.7929 4.29289C13.1834 3.90237 13.8166 3.90237 14.2071 4.29289L21.2071 11.2929C21.5976 11.6834 21.5976 12.3166 21.2071 12.7071L14.2071 19.7071C13.8166 20.0976 13.1834 20.0976 12.7929 19.7071C12.4024 19.3166 12.4024 18.6834 12.7929 18.2929L18.0858 13H4.5C3.94772 13 3.5 12.5523 3.5 12C3.5 11.4477 3.94772 11 4.5 11H18.0858L12.7929 5.70711C12.4024 5.31658 12.4024 4.68342 12.7929 4.29289Z"
                  fill="white"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="home-1">
        <img class="home-background" src="assets/img/Home/home-background0.png" />
        <div class="home-1-text">
          <div class="button-journey">
            <div class="rectangle8"></div>
            <div class="start-your-healing-journey-menial">
              Start Your Healing Journey Menial
            </div>
          </div>
          <div class="button-schedule2">
            <div class="rectangle-32"></div>
            <div class="schedule-your-counseling-session">
              Schedule Your Counseling Session
            </div>
          </div>
          <div class="text">
            <div
              class="rediscover-your-bliss-and-harmony-explore-menial-com-your-hub-for-online-guidance-on-positive-livings"
            >
              Rediscover Your Bliss and Harmony: Explore &#039;Menial.com&#039;
              - Your Hub for Online Guidance on Positive Livings
            </div>
            <div
              class="you-re-not-alone-on-this-journey-our-compassionate-counselors-are-here-to-guide-you"
            >
              You&#039;re not alone on this journey. Our compassionate
              counselors are here to guide you.
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
