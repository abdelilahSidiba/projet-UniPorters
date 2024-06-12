import { useCallback } from "react";
import styles from "./BookARide.module.css";

const BookARide = () => {
  const onFrameContainerClick = useCallback(() => {
    // Please sync "Home Page for passenger" to the project
  }, []);

  return (
    <div className={styles.bookARide}>
      <main className={styles.signUp}>
        <header className={styles.container3}>
          <img
            className={styles.hichamLogo1}
            alt=""
            src="/hicham-logo-1@2x.png"
          />
          <b className={styles.uniporters}>
            <span>UNI</span>
            <span className={styles.porters}>PORTERS</span>
          </b>
          <img className={styles.iconButton2} alt="" src="/icon-button-2.svg" />
          <div className={styles.help}>Help</div>
          <div className={styles.container31}>
            <div className={styles.hichamLogo1Wrapper}>
              <img
                className={styles.hichamLogo11}
                loading="lazy"
                alt=""
                src="/hicham-logo-1@2x.png"
              />
            </div>
            <div className={styles.uniportersWrapper}>
              <a className={styles.uniporters1}>
                <span>UNI</span>
                <span className={styles.porters1}>PORTERS</span>
              </a>
            </div>
            <div className={styles.frameWrapper}>
              <div className={styles.frame} onClick={onFrameContainerClick}>
                <a className={styles.home}>Home</a>
              </div>
            </div>
            <div className={styles.container3Inner}>
              <div className={styles.frameParent}>
                <div className={styles.bookARideParent}>
                  <a className={styles.bookARide1}>Book a Ride</a>
                  <div className={styles.rectangleWrapper}>
                    <div className={styles.rectangle} />
                  </div>
                </div>
                <a className={styles.myTrips}>My Trips</a>
              </div>
            </div>
            <div className={styles.frameContainer}>
              <div className={styles.frame1}>
                <a className={styles.aboutUs}>About us</a>
              </div>
            </div>
            <div className={styles.iconButton2Wrapper}>
              <img
                className={styles.iconButton21}
                loading="lazy"
                alt=""
                src="/icon-button-2.svg"
              />
            </div>
            <div className={styles.helpWrapper}>
              <a className={styles.help1}>Help</a>
            </div>
            <div className={styles.amandaSmithWrapper}>
              <a className={styles.amandaSmith}>User</a>
            </div>
            <div className={styles.chevronDownLarge3Wrapper}>
              <img
                className={styles.chevronDownLarge3}
                loading="lazy"
                alt=""
                src="/chevron-down-large-3.svg"
              />
            </div>
          </div>
        </header>
        <section className={styles.signUpInner}>
          <div className={styles.frameGroup}>
            <div className={styles.container29Wrapper}>
              <div className={styles.container29}>
                <div className={styles.planYourTripWithEaseParent}>
                  <h1 className={styles.planYourTrip}>
                    Plan your trip with ease
                  </h1>
                  <div className={styles.textfieldWrapper}>
                    <div className={styles.textfield}>
                      <div className={styles.enterYourLocation}>
                        Enter Your Location
                      </div>
                      <div className={styles.chevronDownLargeWrapper}>
                        <img
                          className={styles.chevronDownLarge}
                          alt=""
                          src="/chevron-down-large.svg"
                        />
                      </div>
                      <b className={styles.departureLocation}>
                        Departure Location
                      </b>
                    </div>
                  </div>
                </div>
                <div className={styles.container29Inner}>
                  <div className={styles.textfieldParent}>
                    <div className={styles.textfield1}>
                      <div className={styles.enterYourDestination}>
                        Enter Your Destination
                      </div>
                      <div className={styles.chevronDownLargeContainer}>
                        <img
                          className={styles.chevronDownLarge1}
                          alt=""
                          src="/chevron-down-large.svg"
                        />
                      </div>
                      <b className={styles.destination}>Destination</b>
                    </div>
                    <div className={styles.timeOfTravelParent}>
                      <b className={styles.timeOfTravel}>Time of Travel</b>
                      <div className={styles.textfield2}>
                        <input
                          className={styles.am}
                          placeholder="11:00 AM"
                          type="text"
                        />
                        <div className={styles.clockWrapper}>
                          <img
                            className={styles.clockIcon}
                            alt=""
                            src="/clock.svg"
                          />
                        </div>
                      </div>
                    </div>
                    <div className={styles.eventDateParent}>
                      <b className={styles.eventDate}>Date of Travel</b>
                      <div className={styles.textfield3}>
                        <div className={styles.div}>02/20/2023</div>
                        <div className={styles.calendarWrapper}>
                          <img
                            className={styles.calendarIcon}
                            alt=""
                            src="/calendar.svg"
                          />
                        </div>
                      </div>
                    </div>
                    <div className={styles.frameDiv}>
                      <div className={styles.offerYourFarParent}>
                        <b
                          className={styles.offerYourFar}
                        >{`Offer your far $ `}</b>
                        <div className={styles.textfield4}>
                          <div className={styles.wrapper}>
                            <div className={styles.div1}>90</div>
                          </div>
                          <b className={styles.mad}>/Mad</b>
                        </div>
                      </div>
                      <div className={styles.textbox12}>
                        <div className={styles.guestsWrapper}>
                          <b className={styles.guests}>Guests</b>
                        </div>
                        <div className={styles.guestsParent}>
                          <div className={styles.guests1}>2 guests</div>
                          <div className={styles.pencilLineWrapper}>
                            <img
                              className={styles.pencilLineIcon}
                              alt=""
                              src="/pencil-line.svg"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className={styles.button2}>
                  <div className={styles.bookNow}> Book Now</div>
                </div>
              </div>
            </div>
            <img className={styles.mapIcon} alt="" src="/map.svg" />
          </div>
        </section>
      </main>
    </div>
  );
};

export default BookARide;
