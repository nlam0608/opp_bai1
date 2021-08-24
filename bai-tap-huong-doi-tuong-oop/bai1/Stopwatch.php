<?php
//
//Trường startTime và endTime là private với phương thức getter để trả về giá trị của startTime và endTime.
//Phương thức khởi tạo không tham số khởi tạo startTime với thời gian hiện tại của hệ thống.
//Phương thức start() để reset startTime về thời gian hiện tại của hệ thống.
//Phương thức stop() để thiết đặt endTime về thời gian hiện tại của hệ thống.
//Phương thức getElapsedTime() trả về thời gian đã trôi qua theo số milisecond giây
//Vẽ sơ đồ UML cho lớp StopWatch và cài đặt lớp.
//Viết chương trình đo thời gian thực thi của thuật toán sắp xếp chọn (selection sort) cho 100,000 số.

class Stopwatch
{
    private $startTime;
    private $endTime;

    public function __construct($endTime=0)
    {
        $this->startTime = date('Y-m-d H:i:s');
        $this->endTime = $endTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function start(){
        $this->startTime = microtime('Y-m-d H:i:s');
        $this->startTime = explode( " ", $this->startTime );
        return $this->startTime[1] + $this->startTime[0];
    }

    public function stop(){
        return $this->endTime = $this->startTime;
    }

    function getElapsedTime(){
        return $this->endTime - $this->startTime;
    }


}

