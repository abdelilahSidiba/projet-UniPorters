import { useEffect, useState } from "react";
import Fouter from "../component/Fouter";
import Navbar from "../component/Navbar";
import ToursPackage from "../component/ToursPackage";
import ImageSlider from "../component/sliders/SliderPuseHover";

import styles from "./LandingPage.module.css";

const LandingPage = () => {


  return (
    <div className={styles.landingPage}>
      {/* this is compenent nav bar  */ }
      <Navbar/>

      <section className={styles.container2}>


      {/*<img className={styles.image14Icon} alt="" src="/image-14@2x.png" />*/}

    <ImageSlider/>
        <h1 className={styles.simplicityAndComfortContainer}>
          <span>{`Simplicity and Comfort with `}</span>
          <span className={styles.uniporters}>UniPorters</span>
        </h1>
      </section>

     
       
      <div className={styles.newEventsInNycParent}>
        <h1 className={styles.newEventsInContainer}>
          <span>{`New events in `}</span>
          <span className={styles.nyc}>NYC</span>
        </h1>
        <img className={styles.chevronDownLarge1} alt="" />
      </div>
  
   {/* this is compenent tours et package  */ }   
  <ToursPackage/>

      <section className={styles.container101}>
        <div className={styles.iUsedUniporters}>
          I used UniPorters for a business trip and was impressed with the
          professionalism of the driver and the comfort of the ride. I highly
          recommend their services to anyone looking for a high-quality
          transportation experience.
        </div>
        <h1 className={styles.h1}>"</h1>
        <img className={styles.avatar11Icon} alt="" src="/avatar-11@2x.png" />
        <img className={styles.avatar12Icon} alt="" src="/avatar-12@2x.png" />
        <img className={styles.avatar13Icon} alt="" src="/avatar-13@2x.png" />
        <img
          className={styles.avatar14Icon}
          loading="lazy"
          alt=""
          src="/avatar-14@2x.png"
        />
        <div className={styles.kUsersHave}>200k users have joined us!</div>
      </section>


      <section className={styles.container36}>
        <h1 className={styles.partnerWithUsContainer}>
          <p className={styles.partnerWithUs}>Partner with Us</p>
          <p className={styles.forGrowthOpportunities}>
            for Growth Opportunities
          </p>
        </h1>
        <img className={styles.image47Icon} alt="" src="/image-47@2x.png" />
        <div className={styles.container38}>
          <h1 className={styles.explorePartnershipOpportunit}>
            Explore Partnership Opportunities Now"
          </h1>
          <h3 className={styles.discoverCollaborativeOpportu}>
            Discover collaborative opportunities with UniPorters to expand your
            reach and enhance customer satisfaction. Partner with us to unlock
            new avenues for growth and success.
          </h3>
          <button className={styles.button3}>
            <div className={styles.startNow}>Start Now</div>
            <img
              className={styles.arrowRightIcon}
              alt=""
              src="/arrow-right-1.svg"
            />
          </button>
        </div>
        <div className={styles.container37}>
          <img className={styles.image48Icon} alt="" src="/image-48@2x.png" />
          <div className={styles.container381}>
            <h1 className={styles.joinOurTeam}>
              Join Our Team: Drive Towards Success with UniPorters
            </h1>
            <h3 className={styles.exploreFlexibleOpportunities}>
              Explore flexible opportunities and earn competitive rewards as a
              driver with UniPorters. Join our team and embark on a journey
              towards personal and professional growth.
            </h3>
            <button className={styles.button31}>
              <div className={styles.startNow1}>Start Now</div>
              <img
                className={styles.arrowRightIcon1}
                loading="lazy"
                alt=""
                src="/arrow-right.svg"
              />
            </button>
          </div>
        </div>
      </section>


      <section className={styles.container18}>
        <h1 className={styles.createYourCustom}>
          Create Your Custom Transportation Package
        </h1>
        <h3 className={styles.experiencePersonalisedTransp}>
          experience personalised transportation tailored to your needs .
        </h3>
        <button className={styles.button32}>
          <div className={styles.getStarted}>Get Started</div>
          <img
            className={styles.arrowRightIcon2}
            alt=""
            src="/arrow-right-2.svg"
          />
        </button>
        <button className={styles.button4}>
          <div className={styles.learnMore}>Learn More</div>
          <img
            className={styles.arrowRightIcon3}
            alt=""
            src="/arrow-right-3.svg"
          />
        </button>
      </section>
  {/* this is compenent fouter  */ }
      <Fouter/>
    </div>
  );
};

export default LandingPage;
