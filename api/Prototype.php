<?php
class Prototype {
    //  Properties
    //  public $name;
    //  public $color;

    // Methods
    function getCategory() 
    {
        $data = array(
            "0" => array(
                "_id"   => "63311b37074e00c92568ce7d",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/service/laser.png",
                "name"  => "LASER"
            ),
            "1" => array(
                "_id"   => "63311b37b852449f9dcbe9c1",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/service/body.png",
                "name"  => "BODY"
            ),
            "2" => array(
                "_id"   => "63311b375943d9b420cfca93",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/service/skin.png",
                "name"  => "SKIN"
            ),
            "3" => array(
                "_id"   => "63311b37c9aa083a150b8fee",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/service/Lifting.jpg",
                "name"  => "ร้อยไหม"
            )
        );
        return json_encode($data, JSON_UNESCAPED_UNICODE);
            
    }
    // Home banner slider
    function getBannerSlider()
    {
        $data = array(
            "0" => array(
                "_id"   => "633142d1381111201a217b47",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/slide/1920x800px.png",
                "name"  => "Banner1"
            ),
            "1" => array(
                "_id"   => "633142d1338f7a375f5e96ed",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/slide/1920x800px.png",
                "name"  => "Banner2"
            ),
            "2" => array(
                "_id"   => "633142d10ab75a810e6e075d",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/slide/1920x800px.png",
                "name"  => "Banner3"
            )
        );
        return json_encode($data, JSON_UNESCAPED_UNICODE);
        
    }
    function getReviews()
    {
        
        $data = array(
            "0" => array(
                "_id"   => "633142d1381111201a217b47",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/review/review-1.png",
                "name"  => "Review1"
            ),
            "1" => array(
                "_id"   => "633142d1338f7a375f5e96ed",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/review/review-2.png",
                "name"  => "Review2"
            ),
            "2" => array(
                "_id"   => "633142d10ab75a810e6e075d",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/review/review-3.png",
                "name"  => "Review3"
            )
        );
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    /**
     * 
     */
    function getArticlesRecommended()
    {
        
        $data = array(
            "0" => array(
                "_id"   => "63316d069e6d6900ac207d7c",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/articles/1.jpg",
                "name"  => "ฟิตหุ่นเฟิร์ม"
            ),
            "1" => array(
                "_id"   => "63316d06415a9c42c56e125d",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/articles/2.jpg",
                "name"  => "เสริมสร้างกล้ามเนื้อ "
            ),
            "2" => array(
                "_id"   => "63316d0662ae25e760868d60",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/articles/3.jpg",
                "name"  => "เพรียวสุด เนียนสุด อะไรสุด !"
            )
        );
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    function getPromotionRecommended()
    {
        
        $data = array(
            "0" => array(
                "_id"   => "63316d069e6d6900ac207d7c",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/articles/promotion/1.jpg",
                "name"  => "NAD +"
            ),
            "1" => array(
                "_id"   => "63316d06415a9c42c56e125d",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/articles/promotion/2.jpg",
                "name"  => "SUPER VITAMIN5G "
            ),
            "2" => array(
                "_id"   => "63316d0662ae25e760868d60",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/articles/promotion/3.jpg",
                "name"  => "LASER ขนรักแร้"
            ),
            "3" => array(
                "_id"   => "63316d069e6d6900ac207d7c",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/articles/promotion/4.jpg",
                "name"  => "LIFTINGU7D"
            ),
            "4" => array(
                "_id"   => "63316d06415a9c42c56e125d",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/articles/promotion/5.jpg",
                "name"  => "ร้อยไหมจมูก "
            ),
            "5" => array(
                "_id"   => "63316d0662ae25e760868d60",
                "index" => "0",
                "isActive"  => true,
                "picture"   => "https://brickhouse-test.com/louvre-clinic-demo/assets/img/articles/promotion/6.jpg",
                "name"  => "MAYA PEN"
            )
        );
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }

}
?>