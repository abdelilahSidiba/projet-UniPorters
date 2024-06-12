import { Link } from "react-router-dom";
import Navbar from "../component/Navbar";
import styles from "./Login.module.css";
import { useState } from "react";

const Login = () => {
 const[email,setEmail]=useState('')
 const[password,setpassword]=useState('')

   const Onlogin=()=>{

 console.log(email,password)

   }


  return (
    <div className={styles.signUpParent}>
      <div className={styles.signUp}>
             {/* this is compenent nav bar  */ }
             <Navbar/>

             <img className={styles.image27Icon} alt="" src="/image-27@2x.png" />
             <div className={styles.signUpChild} />
             <img className={styles.image21Icon} alt="" src="/image-21@2x.png" />

        <div className={styles.container29}>
        <img className={styles.iconButton1} alt="" src="/icon-button-1.svg" />

          <div className={styles.textbox3}>
            <img className={styles.vectorIcon} alt="" src="/vector.svg" />

                <label className={styles.email}>Email</label>
                <input 
                type="email" 
                onChange={(e)=>(setEmail(e.target.value))}
                placeholder="example.email@gmail.com" 
                className={styles.exampleemailgmailcom}/>
          </div>
          

          <div className={styles.textbox4}>
                <img className={styles.vectorIcon} alt="" src="/vector.svg" />

                <label className={styles.email}>Password</label>
                <input type="password" 
                onChange={(e)=>(setpassword(e.target.value))}
                className={styles.exampleemailgmailcom} 
                placeholder="Enter at least 8+ characters"
                />
          </div>
          
            <div className={styles.iAgreeWithContainer}>
            <span>{`I agree with `}</span>
            <span className={styles.porters}>{`Terms & Conditions`}</span>
          </div>
          <div className={styles.checkboxContainer}>
          <label className={styles.checkboxLabel}>
            <input type="checkbox" className={styles.checkboxInput} />
            <span className={styles.customCheckbox}></span>
          </label>
        </div>


          <div className={styles.button2}>
            <div className={styles.signUp1} onClick={Onlogin}> log in</div>
          </div>
          <div className={styles.orSignUp}>Or sign up with</div>

          <div className={styles.button13}>
            <div className={styles.text} />
            <img
              className={styles.logoFacebookIcon}
              alt=""
              src="/logo-facebook.svg"
            />
          </div>
          
          <div className={styles.button14}>
            <div className={styles.text} />
            <img className={styles.logoFacebookIcon} alt="" src="/google.svg" />
          </div>

          <b className={styles.welcome}>Welcome.</b>
          <div className={styles.createAnAccount}>Create an account</div>

         

          <div className={styles.alreadyHaveAn}>Already have an account?</div>
          <Link to={"/Login"} className={styles.logIn}>Log in</Link>
          
        </div>
      </div>
    </div>
  );
};

export default Login;
