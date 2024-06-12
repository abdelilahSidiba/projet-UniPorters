import React from 'react'
import styles from '../component/Navbar.module.css';
import { Link } from 'react-router-dom';
export default function Navbar() {
  return (
    <header className={styles.container3}>
    <div className={styles.frameParent}>
      <div className={styles.frameWrapper}>
        <div className={styles.hichamLogo1Parent}>
          <img
            className={styles.hichamLogo1}
            loading="lazy"
            alt=""
            src="/hicham-logo-1@2x.png"
          />
          <div className={styles.uniportersWrapper}>
            <b className={styles.uniporters}>
              <span>UNI</span>
              <span className={styles.porters}>PORTERS</span>
            </b>
          </div>
        </div>
      </div>
      <div className={styles.frameGroup}>
        <div className={styles.frameContainer}>
          <div className={styles.driverParent}>
           <Link to={""}><b  className={styles.driver}>Driver</b></Link>    
            <div className={styles.rectangleWrapper}>
              <div className={styles.rectangle} />
            </div>
          </div>
        </div>
        <div className={styles.driveWrapper}>
          <Link to={""} className={styles.drive}>Passenger</Link>
        </div>
        <div className={styles.frameDiv}>
          <div className={styles.partnersWrapper}>
            <Link to={""} className={styles.partners}>Partners</Link>
          </div>
          <div className={styles.frame}>
            <Link to={""} className={styles.aboutUs}>About us</Link>
          </div>
        </div>
      </div>
    </div>
    <div className={styles.container3Inner}>
      <div className={styles.frameParent1}>
        <div className={styles.iconButton2Parent}>
          <img
            className={styles.iconButton2}
            loading="lazy"
            alt=""
            src="/icon-button-2.svg"
          />
          <div className={styles.helpWrapper}>
            <Link to={""} className={styles.help}>Help</Link>
          </div>
        </div>
        <div className={styles.frameWrapper1}>
          <div className={styles.button2Parent}>
            <button className={styles.button2}>
              <Link to={"/login"} className={styles.logIn}>Log in</Link>
            </button>
            <button className={styles.button1}>
              <Link to={"/SingUp"} className={styles.signUp}> Sign up</Link>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>
  )
}
