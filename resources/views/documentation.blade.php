<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leg-phsyiorevive</title>
    <link rel="icon" href="{{asset('Sections/images/IMG_2837.PNG')}}">
    <link rel="stylesheet" href="{{asset('Sections/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Sections/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('Sections/css/documentation.css')}}">
{{--    <link rel="stylesheet" href="css/documentation.css {{asset('Sections/css/all.css')}}">--}}
    <link rel="stylesheet" href="{{asset('Sections/js/bootstrap.bundle.min.js')}}">
    <link rel="stylesheet" href=" {{asset('Sections/js/all.js')}}">
</head>
<body>
     <!--start nav-->
{{--@include('navbar')--}}
<!--end nav-->

 <!-- Service Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h2>Body health Solutions</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100 p-5" >
                    <h4 class="mb-3">Overview</h4>

                    <a class="btn" href="#" id="mybtn1" onclick="overview()"><i class="fa fa-plus text-primary me-3 icon"></i> Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <h4 class="mb-3">Prevention</h4>
                    <a class="btn" href="#" id="mybtn2" onclick="prevention()"><i class="fa fa-plus text-primary me-3 icon"></i> Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <h4 class="mb-3">Symptoms and diagnosis</h4>
                    <div class="toggle">  <a class="btn" href="#" id="mybtn3" onclick="diagnosis()"><i class="fa fa-plus text-primary me-3 icon"></i>Read More</a></div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Service End -->
<div id="over-view">
    <h1>Over view</h1>
    <h5>Foot injures </h5>
 <p>
 <b>
1-Ankle Sprains
</b>
A sprained ankle happens when there is a tear in the ligaments that connect the bones of the leg to the foot. This type of injury is one of the most common among football players due to the strain they put on their ankles when running or jumping. If they are tackled or take a fall, they can sprain their ankle if they land in an awkward position. Repeated ankle sprains can not only cause chronic pain but can lead to long-term complications such as arthritis.
<div class="image">
 <img src="{{asset('Sections/images/photo_2024-05-19_15-02-49.jpg')}}">
</div>
<b>
2-Turf Toe
</b>
Turf toe is an injury to the ligament of the big toe joint and is one of the most common seen among NFL players. This type of injury happens suddenly when a football player loses traction on turf or another field surface and hyper-extends the big toe joint beyond its normal range of motion. It can also occur if a football player falls on another player’s foot and causes the toe to bend backward. In most cases, turf toe will heal on its own over time using conservative treatment methods such as rest, ice, and elevation. But in severe cases when the toe is dislocated, surgery may be required.
 <div class="image">
<img src="{{asset('Sections/images/photo_2024-05-19_15-04-35.jpg')}}">
 </div>
 <b>3-Jones Fracture</b>
 A Jones fracture is a break on the fifth metatarsal, the long bone along the outer part of the foot that connects to the pinky toe. This type of foot break occurs from overuse or stress on the bone from repetitive motion making it a common type of fracture among football players. To treat this type of fracture, the player may need to wear a foot support to heal, and some players may need surgery.
<div class="image">
    <img src="{{asset('Sections/images/photo_2024-05-19_15-06-38.jpg')}}" >
</div>
<b>
4-Lisfranc Injuries
</b>
Imagine how painful it would be to walk, let alone run, if the bones in the middle of your foot were broken or ligaments in that same area were torn. This is what is known as a Lisfranc injury. Sometimes, the injury can be more on the minor side, similar to the injury suffered by running back Najee Harris of the Pittsburgh steelers, were a sprain occurs in the middle of your foot. Regardless of whether it's minor or not, Lisfranc injuries can be quite painful.
<div  class="image">
    <img src="{{asset('Sections/images/photo_2024-05-19_15-08-18.jpg')}}">
</div>
</p>
</div>
<div id="prevention" >
    <h1>Prevenetion</h1>
    <p><b>
        1-Ankle sprains Prevention
        </b>
        Strengthening ankles and balance training
        The simplest way to strengthen your ankles is to stand with your feet apart (ideally at the edge of the step) and raise your heels up so that you stand on your toes. Repeat this 10 times every day and in a couple of weeks, you’ll already see impressive results.
         
        Other than this, you also want to improve your balance. The simplest way to do so is to strengthen your core. The strength of your hips and abdominal area is just as important when it comes to minimizing the odds of an ankle injury. For this particular reason, these are also regarded as ankle sprain prevention exercises.
         
        One more thing you want to do is build up your general flexibility. Going for some yoga sessions and regularly visiting massage parlors are just two ideas that come to mind.
        <br>
        <b>
        2-Turf Toe Prevention
        </b>
        <br>
        You can take a few steps to prevent turf toe:
         
        Wear hard-soled shoes when running or playing sports on hard surfaces.
        Use athletic tape for added support.
        Use proper running mechanics.

        <br>
        <b>
        3-Jones fracture Prevenetion
        </b>
        <br>
        Wear proper shoes for your activity.
        Use proper training techniques.
        Avoid running on uneven surfaces.

        <br>
        <b>
        4-lisfranc injury symptoms
        </b>
        <br>
        Prevenetion
Do correct warm-up and stretching before practice or competition.
Wear correct protective equipment with correct fit.
Use elastic bandages, tape, braces, or high-top athletic shoes for jumping or contact sports.

    </p>

</div>

<div id="diagnosis">
    <h1>Symptoms and diagnosis</h1>
 <p>
 <b>
1-Ankle Sprain Symptoms and Diagnosis
</b>
 include pain and swelling of the affected area. The pain can be troublesome, or it can be so intense that you can't put any weight on your injured foot.
Twisted ankle symptoms include bruising. The ankle may also feel warm to the touch.
When you seek treatment for an ankle sprain, the doctor will conduct a physical exam of your ankle. He or she will also look at surrounding areas for other injuries, such as broken skin.
Often, the doctor will order tests, such as an x-ray, to rule out any broken bones in the ankle or foot.
Doctors diagnose or “grade” sprains based on the amount of force applied to the ankle.
Talking to your doctor about your pain and its location will help with your diagnosis. 
 
<br>
<b>
Symptoms and Diagnosis
 
Turf Toe Symptoms
</b>
Common symptoms of turf toe often include:
 
Pain, especially with activity
Swelling
Bruising
Tenderness to the touch
Limited motion in the toe
You may notice that the pain in the metatarsophalangeal joint lessens when you wear hard-soled shoes.
 <b>
Diagnosing Turf Toe
</b>
To diagnose turf toe, your doctor will do an exam to find out the extent of the injury. He or she will look for symptoms and test your range of motion.
Your injury could be a slight stretching, hyperextension, or tear of the tendon.
You may need an x-ray or MRI if your injury looks to be more severe. This will allow your doctor to rule out a fracture, or other more serious injury.
<br>
<b>
Jones fracture symptoms include:
</b>
• Sharp stabbing pain on the outside of the foot
• Tenderness to the touch
• Swelling
• Discoloration
If you experience any of the above Jones fracture symptoms, consider seeking medical treatment. If you think you have broken a bone in your foot, you should stop activity and speak with your doctor.
The avulsion foot fracture also commonly occurs in the fifth metatarsal. These two fractures have similar symptoms, but avulsion foot fractures occur as the result of an ankle roll. Anyone who has symptoms of a fifth metatarsal fracture should seek medical attention.
Diagnosis of a Jones fracture
Your doctor will do a physical exam and ask you about what activity you were doing when you hurt your foot. He or she will perform an X-ray to diagnose the Jones fracture or avulsion fracture and see the extent of the injury.
<br>
<b>
Lisfranc injury symptoms
</b>
Other symptoms of a Lisfranc injury may include:
 
Swelling of the foot, especially on the top
Pain in the midfoot that worsens when standing/walking or when pressure is applied
Abnormal widening of the foot
Inability to bear weight/walk without an aid, such as crutches (in severe injuries)
Lisfranc injury diagnosis
Lisfranc injuries are known for being easily misdiagnosed. They often present as ankle sprains or other foot/ankle injuries. This makes the diagnosis especially important for these injuries.
 
To arrive at a diagnosis, both physical examinations and imaging tests are necessary. The sports medicine physician or surgeon will ask questions about how the injury occurred and will examine the foot to determine the severity of the injury. X-rays and other imaging studies can assist in fully evaluating the extent of the injury. The physician or surgeon may also perform an additional examination while the patient is under anesthesia to further evaluate a fracture or weakening of the joint and surrounding bones.
 
The physical examination may include exercises like standing on the tiptoes of the injured foot or holding the toes and moving them up and down. Standing on the tiptoes puts significant stress on the midfoot, and the patient should notice pain from even a slight Lisfranc injury. Meanwhile, moving the toes up and down puts pressure on the midfoot, which will also produce pain if there in an injury there.
 
Imaging for a Lisfranc injury may include X-rays to show any broken bones and the alignment of the Lisfranc joint complex. If it is out of alignment, it may suggest that there is injury to the ligaments in that area of the foot. X-rays of the undamaged foot may help for comparison. In some cases, CT scans or MRIs will also be used. These tests provide more detailed imaging of the foot than X-rays and allow doctors to view soft tissues.
    </p>

</div>

<!-- Footer Start -->
<div class="container-fluid  text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Services</h5>
                <a class="btn btn-link" href="">Cardiology</a>
                <a class="btn btn-link" href="">Pulmonary</a>
                <a class="btn btn-link" href="">Neurology</a>
                <a class="btn btn-link" href="">Orthopedics</a>
                <a class="btn btn-link" href="">Laboratory</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Our Services</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Support</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Newsletter</h5>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">


                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">phsyiorevive</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
    <script src="{{asset('Sections/js/documentation.js')}}"></script>
</body>
</html>
