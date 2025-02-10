<?php
session_start();
error_reporting(0);
$valid = $_SESSION['user'];
$name =$_SESSION['names'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBOOK DOWNLOADER</title>
    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
</head>
<body>
    <nav>
        <input type="checkbox" name="" id="check">
        <label for="check" id="checkbar"><i class="fa fa-bars" aria-hidden="true"></i></label>
        <label class="logo">eBook Downloader</label>
        <ul>
            <li><a class="active" href="#home">Home</a></li> 
            <li><a href="#">Books Catagery</a>
                <ul>
                    <li><a href="#Programing">Programing</a></li>
                    <li><a href="#Linux">Learn Linux</a></li>
                    <li><a href="#Self-Improvement">Self-Improvement</a></li>
                    <li><a href="#Mystery & Thriller">Mystery & Thriller</a></li>
                    <li><a href="#cyber">Cyber Security & Cloud Computing</a></li>
                </ul>
             </li>
            <!-- <li><a href="#contact">Contact </a></li> -->
            <li><a class="llo"  href="./logout.php"><?php 
             if( $_SESSION["names"]){
                echo $_SESSION["names"]." Logout";
                }else{
                    echo "Login";
                    };?></a></li>
        </ul>
    </nav>

    <!-- =============================HOME SECTION CODE======================================== -->
    
    <section id="home">
        <div id="About">
        <h1>Welcome to <b>eBOOK DOWNLOADER!</b> </br> Drive into a universe of limitless books and knowledge. </br> <b>Happy reading!</b> </h1>
        </div>
    </section>

<!-- =======================PROGRAMING BOOKS SECTION CODE===================== -->
   
<section id="Programing">
        <div class="container">
        <h2>Programming Books</h2>
        <div class="book-container">
            <div class="book-detail">
                <img src="images/programing/JavaScripti.png" alt="">
                <h3>JavaScript</h3>
                
                <p>"Dive into the JavaScript universe with our book – your passport to web wizardry. Uncover the secrets of front-end magic and back-end mastery. Elevate your coding prowess and sculpt digital wonders. Your journey to JavaScript enlightenment begins here. 🚀💻✨"</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/JavaScriptb.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/programing/Pythoni.png" alt="">
                <h3>Python</h3>
                <p>"Python: The sleek and powerful language for all. From beginners to experts, its simplicity reigns. Versatile across data science, web, and AI domains, Python sparks innovation. Embrace the elegance, join the Python journey – where code meets creativity. 🐍💻✨"</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Python.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/programing/R1.png" alt="">
                <h3>R Programming</h3>
                <p>"Dive into the world of R with our programming masterpiece — your gateway to statistical excellence. Unravel the intricacies of R's syntax, from basic analytics to advanced modeling. This book is your roadmap for harnessing R's power in data analysis and visualization."</p>

                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/R.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/programing/power.png" alt="">
                <h3>Power shell</h3>
              <p>"Learn the fundamentals of Power Shell to build reusable scripts and functions to automate administrative tasks with windows. This book created for educational purposes and is
                not aliated with ocial PowerShell® group(s) or company(s)."</p> 
               <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Java.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/programing/c+.png" alt="">
                <h3>C++</h3>
               <p>"Dive into the realm of C++ with our programming guide — a must-read for beginners and experienced developers alike. Unlock the power of C++ syntax, from fundamental concepts to advanced application development.🖥️💻🚀 #CPlusPlusJourney"</p>  
              <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/c%2B%2B.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="./images/programing/C1.png" alt="">
                <h3>C#</h3>
                <p>Embark on a coding adventure with our C# programming guide — a roadmap for novices and seasoned developers alike. Uncover the elegance of C#'s syntax and its versatility in application development.  🌐💻🚀 #CSharpMastery</p>              
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/C%23.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/programing/ci.png" alt="">
                <h3>Programming Using C</h3>
                <p> "Embark on a programming journey with our C programming guide — an essential companion for beginners and seasoned developers alike. Unravel the power of C's syntax, from foundational concepts to advanced system-level programming."🖥️💻🚀 #CMastery
                </p>               
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/c.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/programing/Androidi.png" alt="">
                <h3>Android Development</h3>
                <p>"Dive into the world of Android development with our comprehensive guide — a roadmap for beginners and seasoned developers. Unlock the secrets of Android app creation, from UI design to backend integration.💻🚀 #AndroidDevJourney"</p> 
               <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Android.pdf">Preview & Download</a>
            </div>

        </div>
    </div>
</section>

<!-- ================LINUX BOOKS SECTION CODE=================================-->

<section id="Linux">
    
    <div class="container">
        <h2>All Linux Books</h2>
        <div class="book-container">

            <div class="book-detail">
                <img src="images/linux/l1.png" alt="">
                <h3>Ubuntu-Linux</h3>
               <p>A comprehensive guide tailored for beginners, covering Ubuntu Linux essentials. From installation to command-line mastery, this book provides hands-on exercises and real-world examples to accelerate your learning journey.</p>               
              <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Ubuntu+Unleashed+2019+Edition_+Covering+1804%2C+1810%2C+1904+-+PDF+Room.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/linux/rh124.png" alt="">
                <h3>Red Hat System Administration I</h3>
               <p>The "RH124: Red Hat System Administration I" course is an essential foundation for aspiring Linux administrators. <br> #LearnLinux</p> 
               <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/RH124-RHEL7+I+(+PDFDrive.com+).pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/linux/rh134.png" alt="">
                <h3>Red Hat System Administration II</h3>
                <p>Advanced training program by Red Hat, building on the skills acquired in RH124. It delves into more complex aspects of Linux administration. <br>#LearnLinux</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/RH134-RHEL7II+(+PDFDrive.com+).pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/linux/rh254.jpg" alt="">
                <h3>Red Hat System Administration III</h3>
                <p>Advanced training program by Red Hat, building on the skills acquired in RH134. It delves into more complex aspects of Linux administration. <br>#LearnLinux</p>
                <a class="download_btn"  href="https://ebookspdf.s3.amazonaws.com/RED_HAT_SYSTEM_ADMINISTRATION_III_(RH254-RHEL7-en-1-20140711)_-_2014.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/linux/selinux.jpg" alt="">
                <h3>Learn SE-LINUX</h3>
                 <p>The "Fedora 24 SELinux User's and Administrator's Guide" likely provides comprehensive insights into using and administering Security-Enhanced Linux (SELinux) on the Fedora 24 operating system. </p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Fedora+24+SELinux+User's+and+Administrator's+Guide.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/linux/RHEL-NET.jpg" alt="">
                <h3>RHEL-Networking</h3>
                 <p>The "RHEL Networking Guide" serves as a vital resource for Red Hat Enterprise Linux administrators, providing in-depth insights into configuring and managing network settings</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Redhat-Linux-Networking.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/linux/rhel-per.jpeg" alt="">
                <h3>Monitoring & Managing system status or Performance</h3>
                 <p>Optimizing system throughput, latency, and power consumption</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/red_hat_enterprise_linux-8-monitoring_and_managing_system_status_and_performance-en-us.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/linux/intro-linux.png" alt="">
                <h3>Introduction to Linux</h3>
                <p>This resource provides step-by-step guidance, covering fundamental commands. Linux is a free and open-source operating systems based on the Linux kernel.</p>              
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/intro-linux.pdf">Preview & Download</a>
            </div>

        </div>
    </div>
</section>

<!-- ====================SELF IMPROVEMENT BOOKS SECTION CODE ================= -->

<section id="Self-Improvement">
    
    <div class="container">
        <h2>Self-Improvement Books</h2>
        <div class="book-container">

            <div class="book-detail">
                <img src="images/self_improvement/s1.jpg" alt="">
                <h3>The 7 Habits of Highly Effective People</h3>
                <p>"The 7 Habits of Highly Effective People" is a transformative guide that transcends time.Covey outlines seven universal habits"</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/The-7-Habits-of-Highly-Effective-People.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/self_improvement/s2.jpg" alt="">
                <h3>Atomic Habits</h3>
                <p>"Atomic Habits" by James Clear: Unveils the power of small habits, demonstrating how tiny changes lead to remarkable results in personal and professional life. <br> #AtomicHabit</p>  
              <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/atmoic-habits.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/self_improvement/win_friends.jpg" alt="">
                <h3>How to Win Friends and Influence People by Dale Carnegie</h3>
                <p>A classic guide on effective communication and relationship-building.</p>              
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/how-to-win-friends-and-influence-people.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
               <img src="images/self_improvement/p.png" alt="">
                <h3>The Power of Now</h3>
                <p>Explores the transformative power of living in the present moment, providing insights on achieving spiritual enlightenment and inner peace. <br> #Thepowerofnow</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/The+Power+Of+Now+-+Eckhart+Tolle.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/self_improvement/dont-belive-everything-you-think.jpg" alt="">
                <h3>Don't Believe Everything You Think</h3>
                <p>is a thought-provoking exploration into the nature of our thoughts and beliefs. Authored by Thomas Kida, the book challenges readers to question and critically examine their own cognitive processes.</p>  
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Dont-Believe-Everything-You-Think.pdf">Preview &Download</a>
            </div>

            <div class="book-detail">
                <img src="images/self_improvement/101.jpg" alt="">
                <h3>101 Essays That Will Change The Way You Think</h3>
                <p>Each essay is a journey of introspection, challenging conventional wisdom and encouraging personal growth.</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/101-Essays-That-Will-Change-The-Way-You-Think.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/self_improvement/oneskill.png" alt="">
                <h3>The One Skill</h3>
                <p>is a compelling guide that underscores the transformative power of a singular, pivotal skill. Authored by Leo Wildrich, this book delves into the science of habit formation and advocates for the mastery of one skill at a time.</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/The+One+Skill+-+Leo+Babauta.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/self_improvement/Think-and-Grow-Rich-Business-Book-Review-2.jpg" alt="">
                <h3>Think and Grow Rich</h3>
                <p>by Napoleon Hill is a timeless classic in personal development, offering a blueprint for achieving success and prosperity. Hill's principles, derived from in-depth interviews with successful individuals,emphasize the power of mindset and visualization.</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Think-And-Grow-Rich-PDF-Book-In-Hindi-www.PDFdrive.com.co.pdf">Preview & Download</a>
            </div>

        </div>
    </div>
</section>

<!-- ==============MISTERY & THRILLER BOOKS SECTION CODE======================== -->

<section id="Mystery & Thriller">
    
    <div class="container">
        <h2>Mystery & Thriller Books</h2>
        <div class="book-container">

            <div class="book-detail">
                <img src="images/mistry_thriller/loss-end.jpg" alt="">
                <h3>Loss-Of-Reason</h3>
                <p>"Loss-Of-Reason was a great read, if you're looking for a solid mystery this is a book worth your time. I was hooked by the story from the very beginning and I barely put it down until I finished it." - Melissa V.</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Loss-Of-Reason.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/mistry_thriller/uncovering.jpg" alt="">
                <h3>Uncovering Lily</h3>
                <p>A Kidnapped College Student <br>While studying abroad, I was drugged, kidnapped, and imprisoned in a Hong Kong brothel. After several failed attempts to escape, I know my time is running out.</p> 
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Uncovering-Lily.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/mistry_thriller/whiskey.jpg" alt="">
                <h3>Whiskey Witches</h3>
                <p>A string of occult murders. A witch with no powers. The fun never ends. Detective Paige Whiskey is the only Whiskey Witch without powers. <br>  <br>#THRILLER</p> 
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Whiskey-Witches.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/mistry_thriller/stuck.jpeg" alt="">
                <h3>Stuck with a Billionaire</h3>
                <p>"Stuck with a Billionaire" is a contemporary romance novel that unfolds a captivating tale of unexpected connections and budding love. Written by Trisha Sakhlecha.</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Stuck-with-a-Billionaire.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/mistry_thriller/homed.jpg" alt="">
                <h3>The Hound of the Baskervilles</h3>
                 <p>This may be the most popular of all of the Sherlock Holmes stories. Inspired by regional mythology of the British Isles concerning hell-hounds, the tale tells of detective Sherlock Holmes.</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/The-Hound-of-the-Baskervilles.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/mistry_thriller/sigh.jpg" alt="">
                <h3>The Sign of the Four</h3>
                <p>his, the second Sherlock Holmes mystery, begins with Holmes himself in a cocaine-induced haze, interrupted by the arrival of a distressed and beautiful young lady. Each year following the strange disappearance of her father, Miss Morstan has ....</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/The-Sign-of-the-Four.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/mistry_thriller/theafterhouse.jpg" alt="">
                <h3>The After House</h3>
                <p>"An astonishing story of love and mystery, which equals if not surpasses in interest those other lively stories of Mrs. Rinehart's. The novel is one of the sprightliest of the season and will add to the author's reputation as an inventor of 'queer' plots." </p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/The-After-House.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/mistry_thriller/TheValleyofFear.jpg" alt="">
                <h3>The Valley of Fear</h3>
                <p>The plot of the novel is based very loosely on the real-life activities of the Molly Maguires and, particularly, of Pinkerton agent James McParland.The novel is divided into two parts: in the first, Holmes investigates an apparent murder and discovers that the body....</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/The-Valley-of-Fear.pdf">Preview & Download</a>
            </div>

        </div>
    </div>  
</section>

<!-- =============CYBER SECURITY & CLOUD COMPUTING BOOKS SECTION CODE============= -->

<section id="cyber">
    
    <div class="container">
        <h2>Cyber Security & Cloud Computing Books</h2>
        <div class="book-container">

            <div class="book-detail">
                <img src="images/cloud_cyber/CEH_Practical_580x.png" alt="">
                <h3>CEH-Lab-Manual</h3>
                <p>A typical CEH Lab Manual would provide practical exercises, hands-on labs, and challenges aimed at reinforcing the concepts learned during the CEH training. It may cover topics such as penetration testing, network security, and ethical hacking methodologies.</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/CEHv12+LAB+MANUAL.pdf">Preview & Download</a>
            </div>

            
            <div class="book-detail">
                <img src="images/cloud_cyber/ceh.jpg" alt="">
                <h3>CEH-Theory</h3>
                 <p>The CEH theory book is designed to cover the foundational concepts, methodologies, and best practices in ethical hacking and penetration testing. Authored or endorsed by EC-Council, the organization behind the CEH certification. <br>#CEH</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/CEH11-theory.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/cloud_cyber/chfi.jpg" alt="">
                <h3>CHFI</h3>
                <p>The CHFI program is designed for professionals involved in cybersecurity, digital forensics, and incident response. It covers a range of topics, including the investigation of cybercrimes, gathering evidence, and the legal aspects of digital forensics.</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Digital+Forensics+Essentials.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/cloud_cyber/azure.png" alt="">
                <h3>Azure AZ-104</h3>
                 <p> Azure Administrator Associate, is designed for IT professionals responsible for managing Azure services and resources. The certification covers key areas such as implementing and managing virtual networks, securing identities, and ensuring data storage..</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Azure+Cloud.pdf">Preview & Download</a>
            </div>
            
            <div class="book-detail">
                <img src="images/cloud_cyber/aws.jpg" alt="">
                <h3>AWS</h3>
                 <p>The AWS service is provided by the Amazon that uses distributed IT infrastructure to provide different IT resources available on demand. It provides different services such as infrastructure as a service (IaaS), platform as a service (PaaS) and packaged software as a service (SaaS).</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/aws.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/cloud_cyber/NDE.jpg" alt="">
                <h3>Network Defense Essentials</h3>
                 <p> Network Defense Essentials covers the fundamental concepts of information security and network defence</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/network+defense+essential.pdf">Preview & Download</a>
            </div>
    
        <div class="book-detail">
                <img src="images/cloud_cyber/CompTIA.png" alt="">
                <h3>Comp TIA IT Security+</h3>
                 <p>CompTIA Security+ is a global certification that validates the baseline skills necessary to perform core security functions and pursue an IT security career.</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Security%2B.pdf">Preview & Download</a>
            </div>
           
            <div class="book-detail">
                <img src="images/cloud_cyber/ibm.jpg" alt="">
                <h3>Essentials of Application Development on IBM Cloud</h3>
                <p>This book is used as presentation guide for the IBM Skills Academy track Cloud Application. Developer and as preparation material for the IBM professionals.</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/ibm.pdf">Preview & Download</a>
            </div>
        </div>
    </div>
</section>
<section id="cyber">
    
    <div class="container">
        <h2></h2>
        <div class="book-container">

           

            <div class="book-detail">
                <img src="images/cloud_cyber/aws.jpg" alt="">
                <h3>AWS</h3>
                 <p>The AWS service is provided by the Amazon that uses distributed IT infrastructure to provide different IT resources available on demand. It provides different services such as infrastructure as a service (IaaS), platform as a service (PaaS) and packaged software as a service (SaaS).</p>
               
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/aws.pdf">Preview & Download</a>
            </div>

            <div class="book-detail">
                <img src="images/cloud_cyber/NDE.jpg" alt="">
                <h3>Network Defense Essentials</h3>
                 <p> Network Defense Essentials covers the fundamental concepts of information security and network defence</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/network+defense+essential.pdf">Preview & Download</a>
            </div>
    
        <div class="book-detail">
                <img src="images/cloud_cyber/CompTIA.png" alt="">
                <h3>Comp TIA IT Security+</h3>
                 <p>CompTIA Security+ is a global certification that validates the baseline skills necessary to perform core security functions and pursue an IT security career.</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/Security%2B.pdf">Preview & Download</a>
            </div>
           
            <div class="book-detail">
                <img src="images/cloud_cyber/ibm.jpg" alt="">
                <h3>Essentials of Application Development on IBM Cloud</h3>
                <p>This book is used as presentation guide for the IBM Skills Academy track Cloud Application. Developer and as preparation material for the IBM professionals.</p>
                <a class="download_btn" href="https://ebookspdf.s3.amazonaws.com/ibm.pdf">Preview & Download</a>
            </div>
        </div>
    </div>
</section>

<!-- ACCESS ONLY AUTHENTIC USER -->

<script>
    const name =document.querySelector('.llo');
     if(null == <?php echo json_encode($name); ?>){
        // console.log(name);
        name.href="./login.php";
     }
    const valid = <?php echo json_encode($valid); ?>; 
        if( valid == null){
            const links = document.querySelectorAll('.download_btn');          
                links.forEach((l)=>{
                   l.href="./login.php";

              });
          }  
</script>

</body>
</html>