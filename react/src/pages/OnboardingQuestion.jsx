import { useState } from "react";
import Navbar from "../component/Navbar";
import styles from "./OnboardingQuestion.module.css";

const OnboardingQuestion = () => {

  const[checked, setChecked]=useState("");
 
  
  return (
    <div className={styles.onboardingQuestion1}>
        
      {/* this is compenent fouter  */ }
      <Navbar/>
      <section className={styles.onboardingQuestion1Inner}>
        <div className={styles.frameParent2}>
          <div className={styles.frameParent3}>
            <div className={styles.frameParent4}>

              <div className={styles.frameParent5}>
                <div className={styles.wrapperOval3Wrapper}>

                  <div className={styles.wrapperOval3}>
                    <input type="radio" 
                           value={"driver"}  
                           name="radio" 
                           className={styles.oval3Icon} 
                           onChange={(e)=>setChecked(e.target.value)} 
                            />
                            {console.log(checked)}
                  </div>

                </div>
                <h1 style={{color:checked==='driver'? 'black': '#6f7787'}} className={styles.areYouA}>Are you a Driver ?</h1>
              </div>
              <div className={styles.vectorWrapper}>
                <img
                  className={styles.frameChild}
                  loading="lazy"
                  alt=""
                  src="/line-7.svg"
                />
              </div>
            </div>
            <div className={styles.frameWrapper2}>
              <div className={styles.frameParent6}>
                <div className={styles.frameParent7}>

                  <div className={styles.oval4Wrapper}>
                    <input 
                           type="radio" 
                           name="radio" 
                           value="passenger"
                           className={styles.oval4Icon}
                           onChange={(e)=>setChecked(e.target.value)}  
                           />
                  </div>

                  <h1 style={{color:checked==='passenger'? 'black': '#6f7787'}} className={styles.areYouA1}>Are you a Passenger ?</h1>
                </div>
                <div className={styles.vectorContainer}>
                  <img
                    className={styles.frameItem}
                    loading="lazy"
                    alt=""
                    src="/line-8.svg"
                  />
                </div>
              </div>
            </div>
          </div>
          <div className={styles.frameParent8}>
            <div className={styles.frameParent9}>
              <div className={styles.oval2Wrapper}>
                <input 
                    type="radio" 
                    name="radio" 
                    value="collaborate"
                    className={styles.oval2Icon}
                    onChange={(e)=>setChecked(e.target.value)} 
                   
                />
              </div>

              <h1 style={{color:checked==='collaborate'? 'black': '#6f7787'}} className={styles.letsCollaborateFor}>
                Let's collaborate for mutual growth and success.
              </h1>
            </div>
            <div className={styles.vectorFrame}>
              <img
                className={styles.frameInner}
                loading="lazy"
                alt=""
                src="/line-9.svg"
              />
            </div>
          </div>
        </div>
      </section>

      <footer className={styles.container35}>
        <button className={styles.button19}>
          <div className={styles.arrowLeftWrapper}>
            <img
              className={styles.arrowLeftIcon}
              loading="lazy"
              alt=""
              src="/arrow-left.svg"
            />
          </div>
          <div className={styles.back}>Back</div>
        </button>
        <button className={styles.button18}>
          <div className={styles.checkWrapper}>
            <img
              className={styles.checkIcon}
              loading="lazy"
              alt=""
              src="/check.svg"
            />
          </div>
          <div className={styles.finish}>Finish</div>
        </button>
      </footer>
    </div>
  );
};

export default OnboardingQuestion;
