<?php
/*
 *********************************************************************************************************
 * daloRADIUS - RADIUS Web Platform
 * Copyright (C) 2007 - Liran Tal <liran@lirantal.com> All Rights Reserved.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 *********************************************************************************************************
 *
 * Description:    Thai language file
 *
 * Authors:        Thanakorn  Nualmai [kornwanghos@gmail.com]
 *
 *********************************************************************************************************
 */

// prevent this file to be directly accessed
if (strpos($_SERVER['PHP_SELF'], '/lang/th.php') !== false) {
    header("Location: ../index.php");
    exit;
}

$l['all']['daloRADIUS'] = sprintf("daloRADIUS %s", $configValues['DALORADIUS_VERSION']);
$l['all']['daloRADIUSVersion'] = sprintf("เวอร์ชัน %s ", $configValues['DALORADIUS_VERSION']);
$l['all']['copyright1'] = 'การจัดการ RADIUS, รายงาน, บัญชี และการเรียกเก็บเงิน โดย <a target="_blank" href="https://github.com/lirantal/daloradius">Liran Tal</a>';
$l['all']['copyright2'] = 'daloRADIUS - ลิขสิทธิ์ &copy; 2007-' . date('Y') . <<<EOF
 <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="ติดตาม @filippolauria บน GitHub">
  <a target="_blank" href="https://github.com/filippolauria">Filippo Lauria</a>
</span>  และ <a target="_blank" href="https://github.com/lirantal/daloradius">Liran Tal</a>.
EOF;

$l['all']['ID'] = "ไอดี";
$l['all']['PoolName'] = "ชื่อพูล";
$l['all']['CalledStationId'] = "รหัสสถานีที่ถูกเรียก";
$l['all']['CallingStationID'] = "รหัสสถานีที่โทร";
$l['all']['ExpiryTime'] = "เวลาหมดอายุ";
$l['all']['PoolKey'] = "คีย์พูล";

/********************************************************************************/
/* Vendor Attributes related translation                                        */
/********************************************************************************/
$l['all']['Dictionary'] = "พจนานุกรม";
$l['all']['VendorID'] = "รหัสผู้จำหน่าย";
$l['all']['VendorName'] = "ชื่อผู้จำหน่าย";
$l['all']['VendorAttribute'] = "แอตทริบิวต์ผู้จำหน่าย";
$l['all']['RecommendedOP'] = "ตัวดำเนินการที่แนะนำ";
$l['all']['RecommendedTable'] = "ตารางที่แนะนำ";
$l['all']['RecommendedTooltip'] = "คำแนะนำที่แนะนำ";
$l['all']['RecommendedHelper'] = "ตัวช่วยที่แนะนำ";
/********************************************************************************/

$l['all']['CSVData'] = "ข้อมูลรูปแบบ CSV";

$l['all']['CPU'] = "ซีพียู";

/* radius related text */
$l['all']['RADIUSDictionaryPath'] = "เส้นทางพจนานุกรม RADIUS";

$l['all']['DashboardSecretKey'] = "คีย์ลับแดชบอร์ด";
$l['all']['DashboardDebug'] = "ดีบัก";
$l['all']['DashboardDelaySoft'] = "เวลาเป็นนาทีสำหรับขอบเขตความล่าช้าแบบ 'อ่อน'";
$l['all']['DashboardDelayHard'] = "เวลาเป็นนาทีสำหรับขอบเขตความล่าช้าแบบ 'แข็ง'";

$l['all']['SendWelcomeNotification'] = "ส่งการแจ้งเตือนต้อนรับ";
$l['all']['SMTPServerAddress'] = "ที่อยู่เซิร์ฟเวอร์ SMTP";
$l['all']['SMTPServerPort'] = "พอร์ตเซิร์ฟเวอร์ SMTP";
$l['all']['SMTPServerFromEmail'] = "ที่อยู่อีเมลผู้ส่ง";

$l['all']['customAttributes'] = "แอตทริบิวต์กำหนดเอง";

$l['all']['UserType'] = "ประเภทของผู้ใช้";

$l['all']['BatchName'] = "ชื่อชุด";
$l['all']['BatchStatus'] = "สถานะชุด";

$l['all']['Users'] = "ผู้ใช้ระบบ";

$l['all']['Compare'] = "การเปรียบเทียบ";
$l['all']['Never'] = "ไม่เคย";

$l['all']['Section'] = "ส่วน";
$l['all']['Item'] = "รายการ";

$l['all']['Megabytes'] = "เมกะไบต์[MB]";
$l['all']['Gigabytes'] = "กิกะไบต์[GB]";

$l['all']['Daily'] = "รายวัน";
$l['all']['Weekly'] = "รายสัปดาห์";
$l['all']['Monthly'] = "รายเดือน";
$l['all']['Yearly'] = "รายปี";

$l['all']['Month'] = "เดือน";

$l['all']['RemoveRadacctRecords'] = "ลบบันทึกบัญชี";

$l['all']['CleanupSessions'] = "ทำความสะอาดเซสชันเก่ากว่า";
$l['all']['DeleteSessions'] = "ลบเซสชันเก่ากว่า";

$l['all']['StartingDate'] = "วันที่เริ่มต้น";
$l['all']['EndingDate'] = "วันที่สิ้นสุด";

$l['all']['Realm'] = "เรล์ม";
$l['all']['RealmName'] = "ชื่อเรล์ม";
$l['all']['RealmSecret'] = "ความลับเรล์ม";
$l['all']['AuthHost'] = "โฮสต์ยืนยันตัวตน";
$l['all']['AcctHost'] = "โฮสต์บัญชี";
$l['all']['Ldflag'] = "ldflag";
$l['all']['Nostrip'] = "nostrip";
$l['all']['Notrealm'] = "notrealm";
$l['all']['Hints'] = "คำแนะนำ";

$l['all']['Proxy'] = "พร็อกซี";
$l['all']['ProxyName'] = "ชื่อพร็อกซี";
$l['all']['ProxySecret'] = "ความลับพร็อกซี";
$l['all']['DeadTime'] = "เวลาหยุด";
$l['all']['RetryDelay'] = "ความล่าช้าในการลองใหม่";
$l['all']['RetryCount'] = "จำนวนครั้งลองใหม่";
$l['all']['DefaultFallback'] = "ค่าเริ่มต้นสำรอง";

$l['all']['Firmware'] = "เฟิร์มแวร์";
$l['all']['NASMAC'] = "MAC Address ของ NAS";

$l['all']['WanIface'] = "อินเทอร์เฟซ Wan";
$l['all']['WanMAC'] = "MAC Address ของ Wan";
$l['all']['WanIP'] = "ไอพี Wan";
$l['all']['WanGateway'] = "เกตเวย์ Wan";

$l['all']['LanIface'] = "อินเทอร์เฟซ Lan";
$l['all']['LanMAC'] = "MAC Address ของ Lan";
$l['all']['LanIP'] = "ไอพี Lan";

$l['all']['WifiIface'] = "อินเทอร์เฟซ Wifi";
$l['all']['WifiMAC'] = "MAC Address ของ Wifi";
$l['all']['WifiIP'] = "ไอพี Wifi";

$l['all']['WifiSSID'] = "ชื่อ Wifi";
$l['all']['WifiKey'] = "รหัส Wifi";
$l['all']['WifiChannel'] = "ช่องสัญญาณ Wifi";

$l['all']['CheckinTime'] = "เช็คอินล่าสุด";

$l['all']['FramedIPAddress'] = "ไอพีที่กำหนด";
$l['all']['SimultaneousUse'] = "การใช้พร้อมกัน";
$l['all']['HgID'] = "รหัส HG";
$l['all']['Hg'] = "HG ";
$l['all']['HgIPHost'] = "ไอพี/โฮสต์ HG";
$l['all']['HgGroupName'] = "ชื่อกลุ่ม HG";
$l['all']['HgPortId'] = "รหัสพอร์ต HG";
$l['all']['NasID'] = "รหัส NAS";
$l['all']['Nas'] = "NAS ";
$l['all']['NasIPHost'] = "ไอพี/โฮสต์ NAS";
$l['all']['NasShortname'] = "ชื่อย่อ NAS";
$l['all']['NasType'] = "ประเภท NAS";
$l['all']['NasPorts'] = "พอร์ต NAS";
$l['all']['NasSecret'] = "รหัสลับ NAS";
$l['all']['NasVirtualServer'] = "เซิร์ฟเวอร์เสมือน NAS";
$l['all']['NasCommunity'] = "ชุมชน NAS";
$l['all']['NasDescription'] = "คำอธิบาย NAS";
$l['all']['PacketType'] = "ประเภทแพ็กเก็ต";
$l['all']['HotSpot'] = "HotSpot";
$l['all']['HotSpots'] = "HotSpot";
$l['all']['HotSpotName'] = "ชื่อ HotSpot";
$l['all']['Name'] = "ชื่อ-นามสกุล";
$l['all']['Username'] = "ชื่อผู้ใช้งาน";
$l['all']['Password'] = "รหัสผ่าน";
$l['all']['PasswordType'] = "ประเภทรหัสผ่าน";
$l['all']['IPAddress'] = "หมายเลขไอพี (IP)";
$l['all']['Profile'] = "โปรไฟล์";
$l['all']['Group'] = "กลุ่ม";
$l['all']['Groupname'] = "ชื่อกลุ่ม";
$l['all']['ProfilePriority'] = "ลำดับความสำคัญโปรไฟล์";
$l['all']['GroupPriority'] = "ลำดับความสำคัญกลุ่ม";
$l['all']['CurrentGroupname'] = "ชื่อกลุ่มปัจจุบัน";
$l['all']['NewGroupname'] = "ชื่อกลุ่มใหม่";
$l['all']['Priority'] = "ลำดับความสำคัญ";
$l['all']['Attribute'] = "แอตทริบิวต์";
$l['all']['Operator'] = "ตัวดำเนินการ";
$l['all']['Value'] = "ค่า";
$l['all']['NewValue'] = "ค่าใหม่";
$l['all']['MaxTimeExpiration'] = "เวลาสูงสุด / หมดอายุ";
$l['all']['UsedTime'] = "เวลาที่ใช้";
$l['all']['Status'] = "สถานะ";
$l['all']['Usage'] = "การใช้งาน";
$l['all']['StartTime'] = "เวลาเริ่มต้น";
$l['all']['StopTime'] = "เวลาสิ้นสุด";
$l['all']['TotalTime'] = "เวลารวม";
$l['all']['TotalTraffic'] = "ปริมาณข้อมูลรวม";
$l['all']['Bytes'] = "ไบต์";
$l['all']['Upload'] = "อัปโหลด";
$l['all']['Download'] = "ดาวน์โหลด";
$l['all']['Rollback'] = "ย้อนกลับ";
$l['all']['Termination'] = "การสิ้นสุด";
$l['all']['NASIPAddress'] = "ที่อยู่ไอพี NAS";
$l['all']['NASShortName'] = "ชื่อย่อ NAS";
$l['all']['Action'] = "การกระทำ";
$l['all']['UniqueUsers'] = "ผู้ใช้ที่ไม่ซ้ำ";
$l['all']['TotalHits'] = "จำนวนการเข้าใช้รวม";
$l['all']['AverageTime'] = "เวลาเฉลี่ย";
$l['all']['Records'] = "บันทึก";
$l['all']['Summary'] = "สรุป";
$l['all']['Statistics'] = "สถิติ";
$l['all']['Credit'] = "เครดิต";
$l['all']['Used'] = "ใช้แล้ว";
$l['all']['LeftTime'] = "เวลาคงเหลือ";
$l['all']['LeftPercent'] = "% ของเวลาที่เหลือ";
$l['all']['TotalSessions'] = "เซสชันทั้งหมด";
$l['all']['LastLoginTime'] = "เวลาเข้าสู่ระบบล่าสุด";
$l['all']['TotalSessionTime'] = "เวลาเซสชันทั้งหมด";
$l['all']['RateName'] = "ชื่ออัตรา";
$l['all']['RateType'] = "ประเภทอัตรา";
$l['all']['RateCost'] = "ค่าใช้จ่ายอัตรา";
$l['all']['Billed'] = "เรียกเก็บแล้ว";
$l['all']['TotalUsers'] = "ผู้ใช้ทั้งหมด";
$l['all']['ActiveUsers'] = "ผู้ใช้ที่ใช้งานอยู่";
$l['all']['TotalBilled'] = "ยอดเรียกเก็บทั้งหมด";
$l['all']['TotalPayed'] = "ยอดชำระทั้งหมด";
$l['all']['Balance'] = "ยอดคงเหลือ";
$l['all']['CardBank'] = "ธนาคารบัตร";
$l['all']['Type'] = "ประเภท";
$l['all']['MACAddress'] = "MAC Address";
$l['all']['Geocode'] = "รหัสภูมิศาสตร์";
$l['all']['PINCode'] = "รหัสพิน";
$l['all']['CreationDate'] = "วันที่สร้าง";
$l['all']['CreationBy'] = "สร้างโดย";
$l['all']['UpdateDate'] = "วันที่อัปเดต";
$l['all']['UpdateBy'] = "อัปเดตโดย";

$l['all']['Discount'] = "ส่วนลด";
$l['all']['BillAmount'] = "จำนวนเงินที่เรียกเก็บ";
$l['all']['BillAction'] = "การกระทำการเรียกเก็บเงิน";
$l['all']['BillPerformer'] = "ผู้ดำเนินการเรียกเก็บเงิน";
$l['all']['BillReason'] = "เหตุผลในการเรียกเก็บเงิน";
$l['all']['Lead'] = "ลีด";
$l['all']['Coupon'] = "คูปอง";
$l['all']['OrderTaker'] = "ผู้รับคำสั่ง";
$l['all']['BillStatus'] = "สถานะบิล";
$l['all']['LastBill'] = "บิลล่าสุด";
$l['all']['NextBill'] = "บิลถัดไป";
$l['all']['BillDue'] = "วันครบกำหนดชำระ";
$l['all']['NextInvoiceDue'] = "วันครบกำหนดใบแจ้งหนี้ถัดไป";
$l['all']['PostalInvoice'] = "ใบแจ้งหนี้ทางไปรษณีย์";
$l['all']['FaxInvoice'] = "ใบแจ้งหนี้ทางแฟกซ์";
$l['all']['EmailInvoice'] = "ใบแจ้งหนี้ทางอีเมล";

$l['all']['ClientName'] = "ชื่อลูกค้า";
$l['all']['Date'] = "วันที่";

$l['all']['edit'] = "แก้ไข";
$l['all']['del'] = "ลบ";
$l['all']['groupslist'] = "รายการกลุ่ม";
$l['all']['TestUser'] = "ทดสอบผู้ใช้";
$l['all']['Accounting'] = "บัญชี";
$l['all']['RADIUSReply'] = "การตอบกลับ RADIUS";

$l['all']['Disconnect'] = "ตัดการเชื่อมต่อ";

$l['all']['Debug'] = "Debug";
$l['all']['Timeout'] = "หมดเวลา";
$l['all']['Retries'] = "ลองใหม่";
$l['all']['Count'] = "นับ";
$l['all']['Requests'] = "คำขอ";

$l['all']['DatabaseHostname'] = "ชื่อโฮสต์ฐานข้อมูล";
$l['all']['DatabasePort'] = "หมายเลขพอร์ตฐานข้อมูล";
$l['all']['DatabaseUser'] = "ผู้ใช้ฐานข้อมูล";
$l['all']['DatabasePass'] = "รหัสผ่านฐานข้อมูล";
$l['all']['DatabaseName'] = "ชื่อฐานข้อมูล";

$l['all']['PrimaryLanguage'] = "ภาษาหลักระบบ";

$l['all']['PagesLogging'] = "บันทึกการเข้าชมหน้า";
$l['all']['QueriesLogging'] = "บันทึกการสอบถาม (เช่น รายงาน, กราฟ ฯลฯ)";
$l['all']['ActionsLogging'] = "บันทึกการกระทำ (เช่น การส่งฟอร์ม)";
$l['all']['FilenameLogging'] = "ไฟล์บันทึก (เส้นทางแบบสัมบูรณ์)";
$l['all']['LoggingDebugOnPages'] = "บันทึกข้อมูล Debug(บนหน้า)";
$l['all']['LoggingDebugInfo'] = "บันทึกข้อมูล Debug";

$l['all']['PasswordHidden'] = "เปิดใช้งานการซ่อนรหัสผ่าน (จะแสดงเครื่องหมายดอกจัน)";
$l['all']['TablesListing'] = "แถว/บันทึกต่อหน้ารายการตาราง";
$l['all']['TablesListingNum'] = "เปิดใช้งานการกำหนดหมายเลขรายการตาราง";
$l['all']['AjaxAutoComplete'] = "เปิดใช้งานการเติมข้อความอัตโนมัติ Ajax";

$l['all']['RadiusServer'] = "เซิร์ฟเวอร์ Radius";
$l['all']['RadiusPort'] = "พอร์ต Radius";

$l['all']['UsernamePrefix'] = "คำนำหน้าชื่อผู้ใช้";

$l['all']['batchName'] = "รหัส/ชื่อชุด";
$l['all']['batchDescription'] = "คำอธิบายชุด";

$l['all']['NumberInstances'] = "จำนวนอินสแตนซ์ที่จะสร้าง";
$l['all']['UsernameLength'] = "ความยาวของสตริงชื่อผู้ใช้";
$l['all']['PasswordLength'] = "ความยาวของสตริงรหัสผ่าน";

$l['all']['Expiration'] = "หมดอายุ";
$l['all']['MaxAllSession'] = "เซสชันสูงสุดทั้งหมด";
$l['all']['SessionTimeout'] = "หมดเวลาเซสชัน";
$l['all']['IdleTimeout'] = "หมดเวลาไม่ใช้งาน";

$l['all']['DBEngine'] = "เอนจิน DB";
$l['all']['radcheck'] = "radcheck";
$l['all']['radreply'] = "radreply";
$l['all']['radgroupcheck'] = "radgroupcheck";
$l['all']['radgroupreply'] = "radgroupreply";
$l['all']['usergroup'] = "usergroup";
$l['all']['radacct'] = "radacct";
$l['all']['operators'] = "ผู้ดำเนินการ";
$l['all']['operators_acl'] = "operators_acl";
$l['all']['operators_acl_files'] = "operators_acl_files";
$l['all']['billingrates'] = "อัตราการเรียกเก็บเงิน";
$l['all']['hotspots'] = "Hotspots";
$l['all']['node'] = "โหนด";
$l['all']['nas'] = "nas";
$l['all']['hunt'] = "radhuntgroup";
$l['all']['radpostauth'] = "radpostauth";
$l['all']['radippool'] = "radippool";
$l['all']['userinfo'] = "userinfo";
$l['all']['dictionary'] = "พจนานุกรม";
$l['all']['realms'] = "เรล์ม";
$l['all']['proxys'] = "พร็อกซี";
$l['all']['billingpaypal'] = "การเรียกเก็บเงิน Paypal";
$l['all']['billingmerchant'] = "ผู้ค้าการเรียกเก็บเงิน";
$l['all']['billingplans'] = "แผนการเรียกเก็บเงิน";
$l['all']['billinghistory'] = "ประวัติการเรียกเก็บเงิน";
$l['all']['billinginfo'] = "ข้อมูลผู้ใช้การเรียกเก็บเงิน";

$l['all']['CreateIncrementingUsers'] = "สร้างผู้ใช้แบบเพิ่มทีละคน";
$l['all']['CreateRandomUsers'] = "สร้างผู้ใช้แบบสุ่ม";
$l['all']['StartingIndex'] = "ดัชนีเริ่มต้น";
$l['all']['EndingIndex'] = "ดัชนีสิ้นสุด";
$l['all']['RandomChars'] = "ตัวอักษรสุ่มที่อนุญาต";
$l['all']['Memfree'] = "หน่วยความจำว่าง";
$l['all']['Uptime'] = "เวลาทำงาน";
$l['all']['BandwidthUp'] = "แบนด์วิดธ์อัปโหลด";
$l['all']['BandwidthDown'] = "แบนด์วิดธ์ดาวน์โหลด";

$l['all']['BatchCost'] = "ต้นทุนชุด";

$l['all']['PaymentDate'] = "วันที่ชำระเงิน";
$l['all']['PaymentStatus'] = "สถานะการชำระเงิน";
$l['all']['FirstName'] = "ชื่อตัว";
$l['all']['LastName'] = "นามสกุล";
$l['all']['VendorType'] = "ผู้ขายผู้ค้า";
$l['all']['PayerStatus'] = "สถานะผู้ชำระ";
$l['all']['PaymentAddressStatus'] = "สถานะที่อยู่การชำระเงิน";
$l['all']['PayerEmail'] = "อีเมลผู้ชำระ";
$l['all']['TxnId'] = "รหัสธุรกรรม";
$l['all']['PlanActive'] = "แผนที่ใช้งานอยู่";
$l['all']['PlanTimeType'] = "ประเภทเวลาแผน";
$l['all']['PlanTimeBank'] = "เวลาคงเหลือแผน";
$l['all']['PlanTimeRefillCost'] = "ค่าใช้จ่ายเติมเงินแผน";
$l['all']['PlanTrafficRefillCost'] = "ค่าใช้จ่ายเติมเงินแผน";
$l['all']['PlanBandwidthUp'] = "แบนด์วิดธ์อัปโหลดแผน";
$l['all']['PlanBandwidthDown'] = "แบนด์วิดธ์ดาวน์โหลดแผน";
$l['all']['PlanTrafficTotal'] = "ปริมาณข้อมูลรวมแผน";
$l['all']['PlanTrafficDown'] = "ปริมาณข้อมูลดาวน์โหลดแผน";
$l['all']['PlanTrafficUp'] = "ปริมาณข้อมูลอัปโหลดแผน";
$l['all']['PlanRecurring'] = "แผนที่ต่ออายุอัตโนมัติ";
$l['all']['PlanRecurringPeriod'] = "ระยะเวลาต่ออายุแผน";
$l['all']['planRecurringBillingSchedule'] = "กำหนดการเรียกเก็บเงินแผนแบบต่ออายุ";
$l['all']['PlanCost'] = "ค่าใช้จ่ายแผน";
$l['all']['PlanSetupCost'] = "ค่าติดตั้งแผน";
$l['all']['PlanTax'] = "แผนภาษี";
$l['all']['PlanCurrency'] = "สกุลเงินแผน";
$l['all']['PlanGroup'] = "โปรไฟล์แผน (กลุ่ม)";
$l['all']['PlanType'] = "ประเภทแผน";
$l['all']['PlanName'] = "ชื่อแผน";
$l['all']['PlanId'] = "รหัสแผน";

$l['all']['UserId'] = "รหัสผู้ใช้";

$l['all']['Invoice'] = "ใบแจ้งหนี้";
$l['all']['InvoiceID'] = "รหัสใบแจ้งหนี้";
$l['all']['InvoiceItems'] = "รายการใบแจ้งหนี้";
$l['all']['InvoiceStatus'] = "สถานะใบแจ้งหนี้";

$l['all']['InvoiceType'] = "ประเภทใบแจ้งหนี้";
$l['all']['Amount'] = "จำนวนเงิน";
$l['all']['Total'] = "รวม";
$l['all']['TotalInvoices'] = "ใบแจ้งหนี้ทั้งหมด";

$l['all']['PayTypeName'] = "ชื่อประเภทการชำระเงิน";
$l['all']['PayTypeNotes'] = "คำอธิบายประเภทการชำระเงิน";
$l['all']['payment_type'] = "ประเภทการชำระเงิน";
$l['all']['payments'] = "การชำระเงิน";
$l['all']['PaymentId'] = "รหัสการชำระเงิน";
$l['all']['PaymentInvoiceID'] = "รหัสใบแจ้งหนี้";
$l['all']['PaymentAmount'] = "จำนวนเงิน";
$l['all']['PaymentDate'] = "วันที่";
$l['all']['PaymentType'] = "ประเภทการชำระเงิน";
$l['all']['PaymentNotes'] = "หมายเหตุการชำระเงิน";

$l['all']['Quantity'] = "จำนวน";
$l['all']['ReceiverEmail'] = "อีเมลผู้รับ";
$l['all']['Business'] = "ธุรกิจ";
$l['all']['Tax'] = "ภาษี";
$l['all']['Cost'] = "ต้นทุน";
$l['all']['TotalCost'] = "ต้นทุนรวม";
$l['all']['TransactionFee'] = "ค่าธรรมเนียมธุรกรรม";
$l['all']['PaymentCurrency'] = "สกุลเงินการชำระเงิน";
$l['all']['AddressRecipient'] = "ผู้รับที่อยู่";
$l['all']['Street'] = "ถนน";
$l['all']['Country'] = "ประเทศ";
$l['all']['CountryCode'] = "รหัสประเทศ";
$l['all']['City'] = "เมือง";
$l['all']['State'] = "รัฐ/จังหวัด";
$l['all']['Zip'] = "รหัสไปรษณีย์";

$l['all']['BusinessName'] = "ชื่อธุรกิจ";
$l['all']['BusinessPhone'] = "โทรศัพท์ธุรกิจ";
$l['all']['BusinessAddress'] = "ที่อยู่ธุรกิจ";
$l['all']['BusinessWebsite'] = "เว็บไซต์ธุรกิจ";
$l['all']['BusinessEmail'] = "อีเมลธุรกิจ";
$l['all']['BusinessContactPerson'] = "ผู้ติดต่อธุรกิจ";
$l['all']['DBPasswordEncryption'] = "ประเภทการเข้ารหัสรหัสผ่าน DB";

$l['all']['Calling Station ID'] = "เข้าใช้งานจาก IP";
$l['all']['Framed IP Address'] = "IP ที่ใช้งานระบบ";
// -------------------------------------------------------
$l['all']['CurrentlyOnline'] = "กำลังออนไลน์";

/* **********************************************************************************
 * Tooltips
 * Helper information such as tooltip text for mouseover events and popup tooltips
 ************************************************************************************/

$l['Tooltip']['batchNameTooltip'] = "ระบุชื่อสำหรับการสร้างชุดนี้";
$l['Tooltip']['batchDescriptionTooltip'] = "ให้คำอธิบายทั่วไปเกี่ยวกับการสร้างชุดนี้";

$l['Tooltip']['hotspotTooltip'] = "เลือกชื่อ Hotspots ที่อินสแตนซ์ชุดนี้เกี่ยวข้องด้วย";

$l['Tooltip']['startingIndexTooltip'] = "ระบุดัชนีเริ่มต้นสำหรับการสร้างผู้ใช้";
$l['Tooltip']['planTooltip'] = "เลือกแผนที่จะเชื่อมโยงกับผู้ใช้";

$l['Tooltip']['InvoiceEdit'] = "แก้ไขใบแจ้งหนี้";
$l['Tooltip']['invoiceTypeTooltip'] = "";
$l['Tooltip']['invoiceStatusTooltip'] = "";
$l['Tooltip']['invoiceID'] = "พิมพ์รหัสใบแจ้งหนี้";
$l['Tooltip']['user_idTooltip'] = "รหัสผู้ใช้";

$l['Tooltip']['amountTooltip'] = "";
$l['Tooltip']['taxTooltip'] = "";

$l['Tooltip']['PayTypeName'] = "พิมพ์ชื่อประเภทการชำระเงิน";
$l['Tooltip']['EditPayType'] = "แก้ไขประเภทการชำระเงิน";
$l['Tooltip']['RemovePayType'] = "ลบประเภทการชำระเงิน";
$l['Tooltip']['paymentTypeTooltip'] = "ชื่อที่เป็นมิตรของประเภทการชำระเงิน<br/>เพื่ออธิบายวัตถุประสงค์ของการชำระเงิน";
$l['Tooltip']['paymentTypeNotesTooltip'] = "คำอธิบายประเภทการชำระเงิน เพื่ออธิบาย<br/>การดำเนินการของประเภทการชำระเงิน";
$l['Tooltip']['EditPayment'] = "แก้ไขการชำระเงิน";
$l['Tooltip']['PaymentId'] = "รหัสการชำระเงิน";
$l['Tooltip']['RemovePayment'] = "ลบการชำระเงิน";
$l['Tooltip']['paymentInvoiceTooltip'] = "ใบแจ้งหนี้ที่เกี่ยวข้องกับการชำระเงินนี้";

$l['Tooltip']['Username'] = "พิมพ์ชื่อผู้ใช้";
$l['Tooltip']['BatchName'] = "พิมพ์ชื่อชุด";
$l['Tooltip']['UsernameWildcard'] = "หมายเหตุ: ไวด์การ์ดจะถูกเพิ่มโดยอัตโนมัติต่อท้ายข้อความที่พิมพ์";
$l['Tooltip']['HotspotName'] = "พิมพ์ชื่อHotspots";
$l['Tooltip']['NasName'] = "พิมพ์ชื่อ NAS";
$l['Tooltip']['GroupName'] = "พิมพ์ชื่อกลุ่ม";
$l['Tooltip']['AttributeName'] = "พิมพ์ชื่อแอตทริบิวต์";
$l['Tooltip']['VendorName'] = "เลือกชื่อผู้จำหน่าย";
$l['Tooltip']['PoolName'] = "พิมพ์ชื่อพูล";
$l['Tooltip']['IPAddress'] = "พิมพ์ที่อยู่ไอพี";
$l['Tooltip']['Filter'] = "พิมพ์ข้อความที่เป็นตัวอักษรและตัวเลข หรือปล่อยว่างเพื่อจับคู่ทั้งหมด";
$l['Tooltip']['Date'] = "เลือกวันที่";
$l['Tooltip']['RateName'] = "พิมพ์ชื่ออัตรา";
$l['Tooltip']['OperatorName'] = "พิมพ์ชื่อผู้ดำเนินการ";
$l['Tooltip']['BillingPlanName'] = "พิมพ์ชื่อแผนการเรียกเก็บเงิน";
$l['Tooltip']['PlanName'] = "พิมพ์ชื่อแผน";

$l['Tooltip']['EditRate'] = "แก้ไขอัตรา";
$l['Tooltip']['RemoveRate'] = "ลบอัตรา";

$l['Tooltip']['rateNameTooltip'] = "ชื่อที่เป็นมิตรของอัตรา<br/>เพื่ออธิบายวัตถุประสงค์ของอัตรา";
$l['Tooltip']['rateTypeTooltip'] = "ประเภทอัตรา เพื่ออธิบาย<br/>การดำเนินการของอัตรา";
$l['Tooltip']['rateCostTooltip'] = "จำนวนค่าใช้จ่ายของอัตรา";

$l['Tooltip']['planNameTooltip'] = "ชื่อของแผน นี่คือชื่อที่เป็นมิตรที่อธิบายลักษณะของแผน";
$l['Tooltip']['planIdTooltip'] = "";
$l['Tooltip']['planTimeTypeTooltip'] = "";
$l['Tooltip']['planTimeBankTooltip'] = "";
$l['Tooltip']['planTimeRefillCostTooltip'] = "";
$l['Tooltip']['planTrafficRefillCostTooltip'] = "";
$l['Tooltip']['planBandwidthUpTooltip'] = "";
$l['Tooltip']['planBandwidthDownTooltip'] = "";
$l['Tooltip']['planTrafficTotalTooltip'] = "";
$l['Tooltip']['planTrafficDownTooltip'] = "";
$l['Tooltip']['planTrafficUpTooltip'] = "";

$l['Tooltip']['planRecurringTooltip'] = "";
$l['Tooltip']['planRecurringBillingScheduleTooltip'] = "";
$l['Tooltip']['planRecurringPeriodTooltip'] = "";
$l['Tooltip']['planCostTooltip'] = "";
$l['Tooltip']['planSetupCostTooltip'] = "";
$l['Tooltip']['planTaxTooltip'] = "";
$l['Tooltip']['planCurrencyTooltip'] = "";
$l['Tooltip']['planGroupTooltip'] = "";

$l['Tooltip']['EditIPPool'] = "แก้ไข IP-Pool";
$l['Tooltip']['RemoveIPPool'] = "ลบ IP-Pool";
$l['Tooltip']['EditIPAddress'] = "แก้ไขที่อยู่ไอพี";
$l['Tooltip']['RemoveIPAddress'] = "ลบที่อยู่ไอพี";

$l['Tooltip']['BusinessNameTooltip'] = "";
$l['Tooltip']['BusinessPhoneTooltip'] = "";
$l['Tooltip']['BusinessAddressTooltip'] = "";
$l['Tooltip']['BusinessWebsiteTooltip'] = "";
$l['Tooltip']['BusinessEmailTooltip'] = "";
$l['Tooltip']['BusinessContactPersonTooltip'] = "";

$l['Tooltip']['proxyNameTooltip'] = "ชื่อพร็อกซี";
$l['Tooltip']['proxyRetryDelayTooltip'] = "เวลา (เป็นวินาที) ที่รอการตอบกลับจากพร็อกซี ก่อนที่จะส่งคำขอพร็อกซีอีกครั้ง";
$l['Tooltip']['proxyRetryCountTooltip'] = "จำนวนครั้งในการลองใหม่ก่อนที่จะยอมแพ้ และส่งข้อความปฏิเสธไปยัง NAS";
$l['Tooltip']['proxyDeadTimeTooltip'] = "หากเซิร์ฟเวอร์บ้านไม่ตอบสนองต่อการลองใหม่หลายครั้ง "
                                      . "FreeRADIUS จะหยุดส่งคำขอพร็อกซีไปที่เซิร์ฟเวอร์ และทำเครื่องหมายว่า 'ตาย'";
$l['Tooltip']['proxyDefaultFallbackTooltip'] = "หากเรล์มที่ตรงกันทั้งหมดไม่ตอบสนอง เราสามารถลองใช้";
$l['Tooltip']['realmNameTooltip'] = "ชื่อเรล์ม";
$l['Tooltip']['realmTypeTooltip'] = "ตั้งค่าเป็น radius สำหรับค่าเริ่มต้น";
$l['Tooltip']['realmSecretTooltip'] = "ความลับที่แชร์ของ RADIUS ของเรล์ม";
$l['Tooltip']['realmAuthhostTooltip'] = "โฮสต์ยืนยันตัวตนของเรล์ม";
$l['Tooltip']['realmAccthostTooltip'] = "โฮสต์บัญชีของเรล์ม";
$l['Tooltip']['realmLdflagTooltip'] = "อนุญาตให้มีการกระจายภาระ ค่าที่อนุญาตคือ 'fail_over' และ 'round_robin'";
$l['Tooltip']['realmNostripTooltip'] = "ว่าจะตัดคำต่อท้ายเรล์มหรือไม่";
$l['Tooltip']['realmHintsTooltip'] = "";
$l['Tooltip']['realmNotrealmTooltip'] = "";

$l['Tooltip']['vendorNameTooltip'] = "ชื่อของผู้จำหน่าย (เช่น Cisco, Mikrotik ฯลฯ)";
$l['Tooltip']['typeTooltip'] = "ประเภทข้อมูลของแอตทริบิวต์นี้ (เช่น string, integer, date, ipaddr ฯลฯ)";
$l['Tooltip']['attributeTooltip'] = "ชื่อของแอตทริบิวต์ (เช่น Framed-IPAddress, Expiration ฯลฯ)";

$l['Tooltip']['RecommendedOPTooltip'] = "ตัวดำเนินการที่แนะนำสำหรับแอตทริบิวต์นี้ (เช่น :=, ==, != ฯลฯ)";
$l['Tooltip']['RecommendedTableTooltip'] = "ตารางเป้าหมายที่แนะนำสำหรับแอตทริบิวต์นี้ (เช่น check หรือ reply)";
$l['Tooltip']['RecommendedTooltipTooltip'] = "ข้อความที่จะแสดงเป็นคำแนะนำเมื่อเลือกแอตทริบิวต์นี้ (เช่น ที่อยู่ไอพีสำหรับผู้ใช้ ฯลฯ)";
$l['Tooltip']['RecommendedHelperTooltip'] = "ฟังก์ชันช่วยเหลือที่จะพร้อมใช้งานเมื่อเลือกแอตทริบิวต์นี้";

$l['Tooltip']['AttributeEdit'] = "แก้ไขแอตทริบิวต์";

$l['Tooltip']['BatchDetails'] = "รายละเอียดชุด";

$l['Tooltip']['UserEdit'] = "แก้ไขผู้ใช้";
$l['Tooltip']['HotspotEdit'] = "แก้ไข Hotspots";
$l['Tooltip']['EditNAS'] = "แก้ไข NAS";
$l['Tooltip']['RemoveNAS'] = "ลบ NAS";
$l['Tooltip']['EditHG'] = "แก้ไข HuntGroup";
$l['Tooltip']['RemoveHG'] = "ลบ HuntGroup";
$l['Tooltip']['hgNasIpAddress'] = "พิมพ์ที่อยู่โฮสต์/ไอพี";
$l['Tooltip']['hgGroupName'] = "พิมพ์ชื่อกลุ่มสำหรับ NAS";
$l['Tooltip']['hgNasPortId'] = "พิมพ์รหัสพอร์ต Nas";
$l['Tooltip']['EditUserGroup'] = "แก้ไขกลุ่มผู้ใช้";
$l['Tooltip']['ListUserGroups'] = "แสดงรายการกลุ่มผู้ใช้";
$l['Tooltip']['DeleteUserGroup'] = "ลบการเชื่อมโยงกลุ่มผู้ใช้";

$l['Tooltip']['EditProfile'] = "แก้ไขโปรไฟล์";

$l['Tooltip']['EditRealm'] = "แก้ไขเรล์ม";
$l['Tooltip']['EditProxy'] = "แก้ไขพร็อกซี";

$l['Tooltip']['EditGroup'] = "แก้ไขกลุ่ม";

$l['FormField']['mngradgroupcheck.php']['ToolTip']['Value'] = "หากคุณระบุค่า จะมีการลบเฉพาะบันทึกเดียวที่ตรงกับทั้งชื่อกลุ่มและค่าที่คุณระบุ หากคุณไม่ระบุค่า จะมีการลบบันทึกทั้งหมดสำหรับชื่อกลุ่มนั้น!";

$l['FormField']['mngradgroupreplydel.php']['ToolTip']['Value'] = "หากคุณระบุค่า จะมีการลบเฉพาะบันทึกเดียวที่ตรงกับทั้งชื่อกลุ่มและค่าที่คุณระบุ หากคุณไม่ระบุค่า จะมีการลบบันทึกทั้งหมดสำหรับชื่อกลุ่มนั้น!";

$l['FormField']['mngradnasnew.php']['ToolTip']['NasShortname'] = "(ชื่อที่อธิบาย)";

$l['FormField']['mngradusergroupdel.php']['ToolTip']['Groupname'] = "หากคุณระบุกลุ่ม จะมีการลบเฉพาะบันทึกเดียวที่ตรงกับทั้งชื่อผู้ใช้และกลุ่มที่คุณระบุ หากคุณไม่ระบุกลุ่ม จะมีการลบบันทึกทั้งหมดสำหรับผู้ใช้นั้น!";

$l['Tooltip']['usernameTooltip'] = "ตัวอย่าง: john_doe ชื่อผู้ใช้ที่แน่นอนที่ผู้ใช้จะใช้เชื่อมต่อกับระบบ";
$l['Tooltip']['passwordTypeTooltip'] = "ตัวอย่าง: Cleartext-Password, MD5-Password, SHA1-Password ประเภทรหัสผ่านที่ใช้ยืนยันตัวตนผู้ใช้ใน RADIUS";
$l['Tooltip']['passwordTooltip'] = "ตัวอย่าง: P@ssw0rd! รหัสผ่านของผู้ใช้ โปรดทราบว่าบางระบบใช้รหัสผ่านที่คำนึงถึงตัวพิมพ์เล็กใหญ่ ดังนั้นโปรดระมัดระวังเป็นพิเศษ";
$l['Tooltip']['groupTooltip'] = "ตัวอย่าง: Premium_Users กลุ่มที่ผู้ใช้จะถูกเพิ่มเข้า โดยการเพิ่มผู้ใช้ไปยังกลุ่มที่เฉพาะเจาะจง พวกเขาจะอยู่ภายใต้แอตทริบิวต์ของกลุ่มนั้น";
$l['Tooltip']['macaddressTooltip'] = "ตัวอย่าง: 00:AA:BB:CC:DD:EE รูปแบบของที่อยู่แมคควรเหมือนกับที่ส่งโดย NAS โดยปกติจะไม่มีตัวอักษรแยก";
$l['Tooltip']['pincodeTooltip'] = "ตัวอย่าง: khrivnxufi101 ป้อนรหัสพินที่แน่นอนที่ผู้ใช้จะใช้ คุณสามารถใช้ตัวอักษรและตัวเลข รหัสพินคำนึงถึงตัวพิมพ์เล็กใหญ่";
$l['Tooltip']['usernamePrefixTooltip'] = "ตัวอย่าง: TMP_ POP_ WIFI1_ คำนำหน้านี้จะถูกเพิ่มที่ต้นของชื่อผู้ใช้ที่สร้างขึ้น";
$l['Tooltip']['instancesToCreateTooltip'] = "ตัวอย่าง: 100 จำนวนผู้ใช้แบบสุ่มที่จะสร้างด้วยโปรไฟล์ที่ระบุ";
$l['Tooltip']['lengthOfUsernameTooltip'] = "ตัวอย่าง: 8 ความยาวของชื่อผู้ใช้ที่จะสร้าง ช่วงที่แนะนำ: 8-12 ตัวอักษร";
$l['Tooltip']['lengthOfPasswordTooltip'] = "ตัวอย่าง: 8 ความยาวของรหัสผ่านที่จะสร้าง ช่วงที่แนะนำ: 8-12 ตัวอักษร";
$l['Tooltip']['hotspotNameTooltip'] = "ตัวอย่าง: Hotel Stratocaster ชื่อที่เป็นมิตรสำหรับ Hotspots";
$l['Tooltip']['hotspotMacaddressTooltip'] = "ตัวอย่าง: 00-aa-bb-cc-dd-ee ที่อยู่แมคของ NAS";
$l['Tooltip']['geocodeTooltip'] = "ตัวอย่าง: -1.002,-2.201 นี่คือพิกัดทางภูมิศาสตร์ที่ใช้เพื่อระบุตำแหน่งของ Hotspots/NAS บนแผนที่ (ดู GIS)";

$l['Tooltip']['reassignplanprofiles'] = "หากเปิดใช้งาน เมื่อใช้ข้อมูลผู้ใช้<br/>
                    โปรไฟล์ที่แสดงในแท็บโปรไฟล์จะถูกละเว้น และ<br/>
                    โปรไฟล์จะถูกกำหนดใหม่ตามการเชื่อมโยงโปรไฟล์ของแผน";

/* ********************************************************************************** */

/* **********************************************************************************
 * Links and Buttons
 ************************************************************************************/

$l['button']['DashboardSettings'] = "การตั้งค่าแดชบอร์ด";

$l['button']['GenerateReport'] = "สร้างรายงาน";

$l['button']['ListPayTypes'] = "แสดงรายการประเภทการชำระเงิน";
$l['button']['NewPayType'] = "ประเภทการชำระเงินใหม่";
$l['button']['EditPayType'] = "แก้ไขประเภทการชำระเงิน";
$l['button']['RemovePayType'] = "ลบประเภทการชำระเงิน";
$l['button']['ListPayments'] = "แสดงรายการการชำระเงิน";
$l['button']['NewPayment'] = "การชำระเงินใหม่";
$l['button']['EditPayment'] = "แก้ไขการชำระเงิน";
$l['button']['RemovePayment'] = "ลบการชำระเงิน";

$l['button']['NewUsers'] = "เพิ่มผู้ใช้ใหม่";

$l['button']['ClearSessions'] = "ล้างเซสชัน";
$l['button']['Dashboard'] = "แดชบอร์ด";
$l['button']['MailSettings'] = "การตั้งค่าอีเมล";

$l['button']['Batch'] = "ชุด";
$l['button']['BatchHistory'] = "ประวัติชุด";
$l['button']['BatchDetails'] = "รายละเอียดชุด";

$l['button']['ListRates'] = "แสดงรายการอัตรา";
$l['button']['NewRate'] = "อัตราใหม่";
$l['button']['EditRate'] = "แก้ไขอัตรา";
$l['button']['RemoveRate'] = "ลบอัตรา";

$l['button']['ListPlans'] = "แสดงรายการแผน";
$l['button']['NewPlan'] = "แผนใหม่";
$l['button']['EditPlan'] = "แก้ไขแผน";
$l['button']['RemovePlan'] = "ลบแผน";

$l['button']['ListInvoices'] = "แสดงรายการใบแจ้งหนี้";
$l['button']['NewInvoice'] = "ใบแจ้งหนี้ใหม่";
$l['button']['EditInvoice'] = "แก้ไขใบแจ้งหนี้";
$l['button']['RemoveInvoice'] = "ลบใบแจ้งหนี้";

$l['button']['ListRealms'] = "แสดงรายการเรล์ม";
$l['button']['NewRealm'] = "เรล์มใหม่";
$l['button']['EditRealm'] = "แก้ไขเรล์ม";
$l['button']['RemoveRealm'] = "ลบเรล์ม";

$l['button']['ListProxys'] = "แสดงรายการพร็อกซี";
$l['button']['NewProxy'] = "พร็อกซีใหม่";
$l['button']['EditProxy'] = "แก้ไขพร็อกซี";
$l['button']['RemoveProxy'] = "ลบพร็อกซี";

$l['button']['ListAttributesforVendor'] = "แสดงรายการแอตทริบิวต์สำหรับผู้จำหน่าย:";
$l['button']['NewVendorAttribute'] = "แอตทริบิวต์ผู้จำหน่ายใหม่";
$l['button']['EditVendorAttribute'] = "แก้ไขแอตทริบิวต์ผู้จำหน่าย";
$l['button']['SearchVendorAttribute'] = "ค้นหาแอตทริบิวต์";
$l['button']['RemoveVendorAttribute'] = "ลบแอตทริบิวต์ผู้จำหน่าย";
$l['button']['ImportVendorDictionary'] = "นำเข้าพจนานุกรมผู้จำหน่าย";

$l['button']['BetweenDates'] = "ระหว่างวันที่:";
$l['button']['Where'] = "ที่ไหน";
$l['button']['AccountingFieldsinQuery'] = "ฟิลด์บัญชีในการสอบถาม:";
$l['button']['OrderBy'] = "เรียงตาม";
$l['button']['HotspotAccounting'] = "บัญชี Hotspots";
$l['button']['HotspotsComparison'] = "เปรียบเทียบ Hotspots";

$l['button']['CleanupStaleSessions'] = "ทำความสะอาดเซสชันที่ค้าง";
$l['button']['DeleteAccountingRecords'] = "ลบบันทึกบัญชี";

$l['button']['ListUsers'] = "รายชื่อผู้ใช้งานทั้งหมด";
$l['button']['ListBatches'] = "แสดงรายการชุด";
$l['button']['RemoveBatch'] = "ลบชุด";
$l['button']['ImportUsers'] = "นำเข้าผู้ใช้";
$l['button']['NewUser'] = "เพิ่มผู้ใช้ใหม่";
$l['button']['NewUserQuick'] = "เพิ่มผู้ใช้ใหม่แบบรวดเร็ว";
$l['button']['BatchAddUsers'] = "เพิ่มผู้ใช้แบบชุด";
$l['button']['EditUser'] = "แก้ไขข้อมูลผู้ใช้";
$l['button']['SearchUsers'] = "ค้นหาข้อมูลผู้ใช้";
$l['button']['RemoveUsers'] = "ลบข้อมูลผู้ใช้";
$l['button']['ListHotspots'] = "แสดงรายการ Hotspots";
$l['button']['NewHotspot'] = " Hotspotsใหม่";
$l['button']['EditHotspot'] = "แก้ไข Hotspots";
$l['button']['RemoveHotspot'] = "ลบ Hotspots";

$l['button']['ListIPPools'] = "แสดงรายการ IP-Pools";
$l['button']['NewIPPool'] = "IP-Pool ใหม่";
$l['button']['EditIPPool'] = "แก้ไข IP-Pool";
$l['button']['RemoveIPPool'] = "ลบ IP-Pool";

$l['button']['ListNAS'] = "รายการอุปกรณ์ NAS ทั้งหมด";
$l['button']['NewNAS'] = "เพิ่มอุปกรณ์ NAS ใหม่";
$l['button']['EditNAS'] = "แก้ไขอุปกรณ์ NAS";
$l['button']['RemoveNAS'] = "ลบอุปกรณ์ NAS";
$l['button']['ListHG'] = "แสดงรายการ HuntGroup";
$l['button']['NewHG'] = "HuntGroup ใหม่";
$l['button']['EditHG'] = "แก้ไข HuntGroup";
$l['button']['RemoveHG'] = "ลบ HuntGroup";
$l['button']['ListUserGroup'] = "แสดงรายการแมปผู้ใช้-กลุ่ม";
$l['button']['ListUsersGroup'] = "แสดงรายการแมปกลุ่มผู้ใช้";
$l['button']['NewUserGroup'] = "แมปผู้ใช้-กลุ่มใหม่";
$l['button']['EditUserGroup'] = "แก้ไขแมปผู้ใช้-กลุ่ม";
$l['button']['RemoveUserGroup'] = "ลบแมปผู้ใช้-กลุ่ม";

$l['button']['ListProfiles'] = "แสดงรายการโปรไฟล์";
$l['button']['NewProfile'] = "โปรไฟล์ใหม่";
$l['button']['EditProfile'] = "แก้ไขโปรไฟล์";
$l['button']['DuplicateProfile'] = "ทำสำเนาโปรไฟล์";
$l['button']['RemoveProfile'] = "ลบโปรไฟล์";

$l['button']['ListGroupReply'] = "แสดงรายการแมปการตอบกลับกลุ่ม";
$l['button']['SearchGroupReply'] = "ค้นหาการตอบกลับกลุ่ม";
$l['button']['NewGroupReply'] = "แมปการตอบกลับกลุ่มใหม่";
$l['button']['EditGroupReply'] = "แก้ไขแมปการตอบกลับกลุ่ม";
$l['button']['RemoveGroupReply'] = "ลบแมปการตอบกลับกลุ่ม";

$l['button']['ListGroupCheck'] = "แสดงรายการแมปการตรวจสอบกลุ่ม";
$l['button']['SearchGroupCheck'] = "ค้นหาการตรวจสอบกลุ่ม";
$l['button']['NewGroupCheck'] = "แมปการตรวจสอบกลุ่มใหม่";
$l['button']['EditGroupCheck'] = "แก้ไขแมปการตรวจสอบกลุ่ม";
$l['button']['RemoveGroupCheck'] = "ลบแมปการตรวจสอบกลุ่ม";

$l['button']['UserAccounting'] = "บัญชีผู้ใช้";
$l['button']['IPAccounting'] = "บัญชีไอพี";
$l['button']['NASIPAccounting'] = "บัญชีไอพี NAS";
$l['button']['NASIPAccountingOnlyActive'] = "แสดงเฉพาะที่ใช้งานอยู่";
$l['button']['DateAccounting'] = "บัญชีวันที่";
$l['button']['AllRecords'] = "บันทึกทั้งหมด";
$l['button']['ActiveRecords'] = "บันทึกที่ใช้งานอยู่";

$l['button']['PlanUsage'] = "การใช้งานแผน";

$l['button']['OnlineUsers'] = "ผู้ใช้งานที่กำลังออนไลน์";
$l['button']['LastConnectionAttempts'] = "ความพยายามเชื่อมต่อล่าสุด";
$l['button']['TopUser'] = "ผู้ใช้อันดับสูงสุด";
$l['button']['History'] = "ประวัติการใช้งาน";

$l['button']['ServerStatus'] = "สถานะเซิร์ฟเวอร์";
$l['button']['ServicesStatus'] = "สถานะบริการ";

$l['button']['daloRADIUSLog'] = "บันทึก daloRADIUS Logs";
$l['button']['RadiusLog'] = "บันทึก Radius Logs";
$l['button']['SystemLog'] = "บันทึก System Logs";
$l['button']['BootLog'] = "บันทึก Boot Logs";

$l['button']['UserLogins'] = "การเข้าสู่ระบบของผู้ใช้";
$l['button']['UserDownloads'] = "การดาวน์โหลดของผู้ใช้";
$l['button']['UserUploads'] = "การอัปโหลดของผู้ใช้";
$l['button']['TotalLogins'] = "การเข้าสู่ระบบทั้งหมด";
$l['button']['TotalTraffic'] = "ปริมาณข้อมูลทั้งหมด";
$l['button']['LoggedUsers'] = "ผู้ใช้ที่เข้าสู่ระบบ";

$l['button']['ViewMAP'] = "ดูแผนที่";
$l['button']['EditMAP'] = "แก้ไขแผนที่";
$l['button']['RegisterGoogleMapsAPI'] = "ลงทะเบียน GoogleMaps API";

$l['button']['UserSettings'] = "การตั้งค่าผู้ใช้";
$l['button']['DatabaseSettings'] = "การตั้งค่าฐานข้อมูล";
$l['button']['LanguageSettings'] = "การตั้งค่าภาษา";
$l['button']['LoggingSettings'] = "การตั้งค่าการบันทึก";
$l['button']['InterfaceSettings'] = "การตั้งค่าอินเทอร์เฟซ";

$l['button']['ReAssignPlanProfiles'] = "กำหนดโปรไฟล์แผนใหม่";

$l['button']['TestUserConnectivity'] = "ทดสอบการเชื่อมต่อผู้ใช้";
$l['button']['DisconnectUser'] = "ตัดการเชื่อมต่อผู้ใช้ (Disconnect/Kick)";

$l['button']['ManageBackups'] = "จัดการสำรองข้อมูล";
$l['button']['CreateBackups'] = "สร้างสำรองข้อมูล";

$l['button']['ListOperators'] = "รายชื่อผู้ดูแลระบบ (Admin)";
$l['button']['NewOperator'] = "เพิ่มผู้ดูแลระบบใหม่";
$l['button']['EditOperator'] = "แก้ไขผู้ดูแลระบบ";
$l['button']['RemoveOperator'] = "ลบผู้ดูแลระบบ";

$l['button']['ProcessQuery'] = "ประมวลผลการสอบถาม";

/* ********************************************************************************** */

/* **********************************************************************************
 * Titles
 * The text related to all the title headers in captions,tables and tabbed layout text
 ************************************************************************************/

$l['title']['ImportUsers'] = "นำเข้าข้อมูลผู้ใช้";

$l['title']['Dashboard'] = "ภาพรวมสถานะระบบ (System Dashboard)";
$l['title']['DashboardAlerts'] = "การแจ้งเตือน";

$l['title']['Invoice'] = "ใบแจ้งหนี้";
$l['title']['Invoices'] = "ใบแจ้งหนี้";
$l['title']['InvoiceRemoval'] = "การลบใบแจ้งหนี้";
$l['title']['Payments'] = "การชำระเงิน";
$l['title']['Items'] = "รายการ";

$l['title']['PayTypeInfo'] = "ข้อมูลประเภทการชำระเงิน";
$l['title']['PaymentInfo'] = "ข้อมูลการชำระเงิน";

$l['title']['RateInfo'] = "ข้อมูลอัตรา";
$l['title']['PlanInfo'] = "ข้อมูลแผน";
$l['title']['TimeSettings'] = "การตั้งค่าเวลา";
$l['title']['BandwidthSettings'] = "การตั้งค่าแบนด์วิดธ์";
$l['title']['PlanRemoval'] = "การลบแผน";

$l['title']['BatchRemoval'] = "การลบชุด";

$l['title']['Backups'] = "การสำรองข้อมูล";
$l['title']['FreeRADIUSTables'] = "ตาราง FreeRADIUS";
$l['title']['daloRADIUSTables'] = "ตาราง daloRADIUS";

$l['title']['IPPoolInfo'] = "ข้อมูล IP-Pool";

$l['title']['BusinessInfo'] = "ข้อมูลธุรกิจ";

$l['title']['CleanupRecordsByUsername'] = "ตามชื่อผู้ใช้";
$l['title']['CleanupRecordsByDate'] = "ตามวันที่";
$l['title']['DeleteRecords'] = "ลบบันทึก";

$l['title']['RealmInfo'] = "ข้อมูลเรล์ม";

$l['title']['ProxyInfo'] = "ข้อมูลพร็อกซี";

$l['title']['VendorAttribute'] = "แอตทริบิวต์ผู้จำหน่าย";

$l['title']['AccountRemoval'] = "การลบบัญชี";
$l['title']['AccountInfo'] = "ข้อมูลบัญชี";

$l['title']['Profiles'] = "โปรไฟล์";
$l['title']['ProfileInfo'] = "ข้อมูลโปรไฟล์";

$l['title']['GroupInfo'] = "ข้อมูลกลุ่ม";
$l['title']['GroupAttributes'] = "แอตทริบิวต์กลุ่ม";

$l['title']['NASInfo'] = "ข้อมูล NAS";
$l['title']['NASAdvanced'] = "ข้อมูล NAS ขั้นสูง";
$l['title']['HGInfo'] = "ข้อมูล HG";
$l['title']['UserInfo'] = "ข้อมูลเชิงลึกผู้ใช้งาน";
$l['title']['BillingInfo'] = "ข้อมูลการเรียกเก็บเงิน";

$l['title']['Attributes'] = "แอตทริบิวต์";
$l['title']['ProfileAttributes'] = "แอตทริบิวต์โปรไฟล์";

$l['title']['HotspotInfo'] = "ข้อมูล Hotspots";
$l['title']['HotspotRemoval'] = "การลบ Hotspots";

$l['title']['ContactInfo'] = "ข้อมูลติดต่อ";

$l['title']['Plan'] = "แผน";

$l['title']['Profile'] = "โปรไฟล์";
$l['title']['Groups'] = "กลุ่ม";
$l['title']['RADIUSCheck'] = "แอตทริบิวต์ตรวจสอบ";
$l['title']['RADIUSReply'] = "แอตทริบิวต์ตอบกลับ";

$l['title']['Settings'] = "การตั้งค่าระบบ";
$l['title']['DatabaseSettings'] = "การตั้งค่าฐานข้อมูล";
$l['title']['DatabaseTables'] = "ตารางฐานข้อมูล";
$l['title']['AdvancedSettings'] = "การตั้งค่าขั้นสูง";

$l['title']['Advanced'] = "การตั้งค่าขั้นสูง";
$l['title']['Optional'] = "ตัวเลือกเพิ่มเติม";

/* ********************************************************************************** */

/* **********************************************************************************
 * Graphs
 * General graphing text
 ************************************************************************************/
$l['graphs']['Day'] = "วัน";
$l['graphs']['Month'] = "เดือน";
$l['graphs']['Year'] = "ปี";
$l['graphs']['Jan'] = "มกราคม";
$l['graphs']['Feb'] = "กุมภาพันธ์";
$l['graphs']['Mar'] = "มีนาคม";
$l['graphs']['Apr'] = "เมษายน";
$l['graphs']['May'] = "พฤษภาคม";
$l['graphs']['Jun'] = "มิถุนายน";
$l['graphs']['Jul'] = "กรกฎาคม";
$l['graphs']['Aug'] = "สิงหาคม";
$l['graphs']['Sep'] = "กันยายน";
$l['graphs']['Oct'] = "ตุลาคม";
$l['graphs']['Nov'] = "พฤศจิกายน";
$l['graphs']['Dec'] = "ธันวาคม";

/* ********************************************************************************** */

/* **********************************************************************************
 * Text
 * General text information that is used through-out the pages
 ************************************************************************************/

$l['text']['LoginRequired'] = "กรุณาเข้าสู่ระบบเพื่อดำเนินการ";
$l['text']['LoginPlease'] = "เข้าสู่ระบบ";

/* ********************************************************************************** */

/* **********************************************************************************
 * Contact Info
 * Related to all contact info text, user info, hotspot owner contact information etc
 ************************************************************************************/

$l['ContactInfo']['FirstName'] = "ชื่อตัว";
$l['ContactInfo']['LastName'] = "นามสกุล";
$l['ContactInfo']['Email'] = "อีเมล";
$l['ContactInfo']['Department'] = "แผนก";
$l['ContactInfo']['WorkPhone'] = "โทรศัพท์ที่ทำงาน";
$l['ContactInfo']['HomePhone'] = "โทรศัพท์บ้าน";
$l['ContactInfo']['Phone'] = "โทรศัพท์";
$l['ContactInfo']['MobilePhone'] = "โทรศัพท์มือถือ";
$l['ContactInfo']['Notes'] = "หมายเหตุ";
$l['ContactInfo']['EnableUserUpdate'] = "เปิดใช้งานการอัปเดตผู้ใช้";
$l['ContactInfo']['EnablePortalLogin'] = "เปิดใช้งานการเข้าสู่ระบบพอร์ทัลผู้ใช้";
$l['ContactInfo']['PortalLoginPassword'] = "รหัสผ่านเข้าสู่ระบบพอร์ทัลผู้ใช้";

$l['ContactInfo']['OwnerName'] = "ชื่อเจ้าของ";
$l['ContactInfo']['OwnerEmail'] = "อีเมลเจ้าของ";
$l['ContactInfo']['ManagerName'] = "ชื่อผู้จัดการ";
$l['ContactInfo']['ManagerEmail'] = "อีเมลผู้จัดการ";
$l['ContactInfo']['Company'] = "บริษัท";
$l['ContactInfo']['Address'] = "ที่อยู่";
$l['ContactInfo']['City'] = "เมือง";
$l['ContactInfo']['State'] = "รัฐ/จังหวัด";
$l['ContactInfo']['Country'] = "ประเทศ";
$l['ContactInfo']['Zip'] = "รหัสไปรษณีย์";
$l['ContactInfo']['Phone1'] = "โทรศัพท์ 1";
$l['ContactInfo']['Phone2'] = "โทรศัพท์ 2";
$l['ContactInfo']['HotspotType'] = "ประเภท Hotspots";
$l['ContactInfo']['CompanyWebsite'] = "เว็บไซต์บริษัท";
$l['ContactInfo']['CompanyPhone'] = "โทรศัพท์บริษัท";
$l['ContactInfo']['CompanyEmail'] = "อีเมลบริษัท";
$l['ContactInfo']['CompanyContact'] = "ผู้ติดต่อบริษัท";

$l['ContactInfo']['PlanName'] = "ชื่อแผน";
$l['ContactInfo']['ContactPerson'] = "ผู้ติดต่อ";
$l['ContactInfo']['PaymentMethod'] = "วิธีการชำระเงิน";
$l['ContactInfo']['Cash'] = "เงินสด";
$l['ContactInfo']['CreditCardNumber'] = "หมายเลขบัตรเครดิต";
$l['ContactInfo']['CreditCardName'] = "ชื่อบัตรเครดิต";
$l['ContactInfo']['CreditCardVerificationNumber'] = "หมายเลขยืนยันบัตรเครดิต";
$l['ContactInfo']['CreditCardType'] = "ประเภทบัตรเครดิต";
$l['ContactInfo']['CreditCardExpiration'] = "วันหมดอายุบัตรเครดิต";

/* ********************************************************************************** */

$l['Intro']['configdashboard.php'] = "การตั้งค่าแดชบอร์ด";

$l['Intro']['paymenttypesmain.php'] = "หน้าประเภทการชำระเงิน";
$l['Intro']['paymenttypesdel.php'] = "ลบรายการประเภทการชำระเงิน";
$l['Intro']['paymenttypesedit.php'] = "แก้ไขรายละเอียดประเภทการชำระเงิน";
$l['Intro']['paymenttypeslist.php'] = "ตารางประเภทการชำระเงิน";
$l['Intro']['paymenttypesnew.php'] = "รายการประเภทการชำระเงินใหม่";
$l['Intro']['paymentslist.php'] = "ตารางการชำระเงิน";
$l['Intro']['paymentsmain.php'] = "หน้าการชำระเงิน";
$l['Intro']['paymentsdel.php'] = "ลบรายการการชำระเงิน";
$l['Intro']['paymentsedit.php'] = "แก้ไขรายละเอียดการชำระเงิน";
$l['Intro']['paymentsnew.php'] = "รายการการชำระเงินใหม่";

$l['Intro']['billhistorymain.php'] = "ประวัติการเรียกเก็บเงิน";
$l['Intro']['msgerrorpermissions.php'] = "ข้อผิดพลาด";

$l['Intro']['repnewusers.php'] = "แสดงรายการผู้ใช้ใหม่";

$l['Intro']['mngradproxys.php'] = "การจัดการพร็อกซี";
$l['Intro']['mngradproxysnew.php'] = "พร็อกซีใหม่";
$l['Intro']['mngradproxyslist.php'] = "รายการพร็อกซี";
$l['Intro']['mngradproxysedit.php'] = "แก้ไขพร็อกซี";
$l['Intro']['mngradproxysdel.php'] = "ลบพร็อกซี";

$l['Intro']['mngradrealms.php'] = "การจัดการเรล์ม";
$l['Intro']['mngradrealmsnew.php'] = "เรล์มใหม่";
$l['Intro']['mngradrealmslist.php'] = "รายการเรล์ม";
$l['Intro']['mngradrealmsedit.php'] = "แก้ไขเรล์ม";
$l['Intro']['mngradrealmsdel.php'] = "ลบเรล์ม";

$l['Intro']['mngradattributes.php'] = "การจัดการแอตทริบิวต์ผู้จำหน่าย";
$l['Intro']['mngradattributeslist.php'] = "รายการแอตทริบิวต์ผู้จำหน่าย";
$l['Intro']['mngradattributesnew.php'] = "แอตทริบิวต์ผู้จำหน่ายใหม่";
$l['Intro']['mngradattributesedit.php'] = "แก้ไขแอตทริบิวต์ผู้จำหน่าย";
$l['Intro']['mngradattributessearch.php'] = "ค้นหาแอตทริบิวต์";
$l['Intro']['mngradattributesdel.php'] = "ลบแอตทริบิวต์ผู้จำหน่าย";
$l['Intro']['mngradattributesimport.php'] = "นำเข้าพจนานุกรมผู้จำหน่าย";
$l['Intro']['mngimportusers.php'] = "นำเข้าผู้ใช้";

$l['Intro']['acctactive.php'] = "เซสชันที่กำลังใช้งาน (Active Sessions)";
$l['Intro']['acctall.php'] = "ประวัติบัญชีการใช้งานทั้งหมด";
$l['Intro']['acctdate.php'] = "การเรียงลำดับตามวันที่";
$l['Intro']['accthotspot.php'] = "บัญชี Hotspots";
$l['Intro']['acctipaddress.php'] = "บัญชีไอพี";
$l['Intro']['accthotspotcompare.php'] = "เปรียบเทียบ Hotspots";
$l['Intro']['acctmain.php'] = "หน้าบัญชี";
$l['Intro']['acctplans.php'] = "หน้าบัญชีแผน";
$l['Intro']['acctnasipaddress.php'] = "บัญชีไอพี NAS";
$l['Intro']['acctusername.php'] = "บัญชีผู้ใช้";
$l['Intro']['acctcustom.php'] = "บัญชีกำหนดเอง";
$l['Intro']['acctcustomquery.php'] = "บัญชีการสอบถามกำหนดเอง";
$l['Intro']['acctmaintenance.php'] = "บำรุงรักษาบันทึกบัญชี";
$l['Intro']['acctmaintenancecleanup.php'] = "ทำความสะอาดการเชื่อมต่อที่ค้าง";
$l['Intro']['acctmaintenancedelete.php'] = "ลบบันทึกบัญชี";

$l['Intro']['billmain.php'] = "หน้าการเรียกเก็บเงิน";
$l['Intro']['ratesmain.php'] = "หน้าอัตราการเรียกเก็บเงิน";
$l['Intro']['billratesdate.php'] = "บัญชีอัตราชำระล่วงหน้า";
$l['Intro']['billratesdel.php'] = "ลบรายการอัตรา";
$l['Intro']['billratesedit.php'] = "แก้ไขรายละเอียดอัตรา";
$l['Intro']['billrateslist.php'] = "ตารางอัตรา";
$l['Intro']['billratesnew.php'] = "รายการอัตราใหม่";

$l['Intro']['paypalmain.php'] = "หน้าธุรกรรม PayPal";
$l['Intro']['billpaypaltransactions.php'] = "หน้าธุรกรรม PayPal";

$l['Intro']['billhistoryquery.php'] = "ประวัติการเรียกเก็บเงิน";

$l['Intro']['billinvoice.php'] = "ใบแจ้งหนี้การเรียกเก็บเงิน";
$l['Intro']['billinvoicedel.php'] = "ลบรายการใบแจ้งหนี้";
$l['Intro']['billinvoiceedit.php'] = "แก้ไขใบแจ้งหนี้";
$l['Intro']['billinvoicelist.php'] = "รายการใบแจ้งหนี้";
$l['Intro']['billinvoicereport.php'] = "รายงานใบแจ้งหนี้";
$l['Intro']['billinvoicenew.php'] = "ใบแจ้งหนี้ใหม่";

$l['Intro']['billplans.php'] = "หน้าแผนการเรียกเก็บเงิน";
$l['Intro']['billplansdel.php'] = "ลบรายการแผน";
$l['Intro']['billplansedit.php'] = "แก้ไขรายละเอียดแผน";
$l['Intro']['billplanslist.php'] = "ตารางแผน";
$l['Intro']['billplansnew.php'] = "รายการแผนใหม่";

$l['Intro']['billpos.php'] = "หน้าจุดขายการเรียกเก็บเงิน";
$l['Intro']['billposdel.php'] = "ลบผู้ใช้";
$l['Intro']['billposedit.php'] = "แก้ไขผู้ใช้";
$l['Intro']['billposlist.php'] = "รายการผู้ใช้";
$l['Intro']['billposnew.php'] = "ผู้ใช้ใหม่";

$l['Intro']['giseditmap.php'] = "โหมดแก้ไขแผนที่";
$l['Intro']['gismain.php'] = "แผนที่ GIS";
$l['Intro']['gisviewmap.php'] = "โหมดดูแผนที่";

$l['Intro']['graphmain.php'] = "กราฟการใช้งาน";
$l['Intro']['graphsalltimetrafficcompare.php'] = "เปรียบเทียบปริมาณข้อมูลทั้งหมด";
$l['Intro']['graphsalltimelogins.php'] = "การเข้าสู่ระบบทั้งหมด";
$l['Intro']['graphsloggedusers.php'] = "ผู้ใช้ที่เข้าสู่ระบบ";
$l['Intro']['graphsoveralldownload.php'] = "การดาวน์โหลดของผู้ใช้";
$l['Intro']['graphsoveralllogins.php'] = "การเข้าสู่ระบบของผู้ใช้";
$l['Intro']['graphsoverallupload.php'] = "การอัปโหลดของผู้ใช้";

$l['Intro']['rephistory.php'] = "ประวัติการเข้าระบบ";
$l['Intro']['replastconnect.php'] = "รายงานการเชื่อมต่อล่าสุด";
$l['Intro']['repstatradius.php'] = "ข้อมูลเดมอน";
$l['Intro']['repstatserver.php'] = "สถานะและข้อมูลเซิร์ฟเวอร์";
$l['Intro']['reponline.php'] = "แสดงรายการผู้ใช้ออนไลน์";
$l['Intro']['replogssystem.php'] = "บันทึกเหตุการณ์ระบบ (System Logs)";
$l['Intro']['replogsradius.php'] = "บันทึกเหตุการณ์ RADIUS (Logs)";
$l['Intro']['replogsdaloradius.php'] = "บันทึกเหตุการณ์ daloRADIUS (Logs)";
$l['Intro']['replogsboot.php'] = "บันทึกเหตุการณ์ Boot (Logs)";
$l['Intro']['replogs.php'] = "บันทึก (Logs)";
$l['Intro']['rephb.php'] = "ฮาร์ทบีต";
$l['Intro']['rephbdashboard.php'] = "แดชบอร์ด NAS ของ daloRADIUS";
$l['Intro']['repbatch.php'] = "ชุด";
$l['Intro']['mngbatchlist.php'] = "รายการเซสชันชุด";
$l['Intro']['repbatchlist.php'] = "รายการผู้ใช้ชุด";
$l['Intro']['repbatchdetails.php'] = "รายละเอียดชุด";

$l['Intro']['rephsall.php'] = "รายการ Hotspots";
$l['Intro']['repmain.php'] = "หน้าหลักรายงาน (Reports)";
$l['Intro']['repstatus.php'] = "หน้าสถานะการทำงานของระบบ";
$l['Intro']['reptopusers.php'] = "รายงานผู้ใช้งานสูงสุด";
$l['Intro']['repusername.php'] = "รายการผู้ใช้";

$l['Intro']['mngbatch.php'] = "สร้างผู้ใช้แบบชุด";
$l['Intro']['mngbatchdel.php'] = "ลบเซสชันชุด";

$l['Intro']['mngdel.php'] = "ลบผู้ใช้";
$l['Intro']['mngedit.php'] = "แก้ไขรายละเอียดผู้ใช้";
$l['Intro']['mnglistall.php'] = "รายการผู้ใช้";
$l['Intro']['mngmain.php'] = "การจัดการผู้ใช้ระบบและ Hotspot";
$l['Intro']['mngbatch.php'] = "การจัดการผู้ใช้แบบชุด";
$l['Intro']['mngnew.php'] = "ผู้ใช้ใหม่";
$l['Intro']['mngnewquick.php'] = "เพิ่มผู้ใช้แบบด่วน";
$l['Intro']['mngsearch.php'] = "ค้นหาผู้ใช้";

$l['Intro']['mnghsdel.php'] = "ลบ Hotspot";
$l['Intro']['mnghsedit.php'] = "แก้ไขรายละเอียด Hotspot";
$l['Intro']['mnghslist.php'] = "รายการ Hotspot";
$l['Intro']['mnghsnew.php'] = "Hotspot ใหม่";

$l['Intro']['mngradusergroupdel.php'] = "ลบการแมปผู้ใช้-กลุ่ม";
$l['Intro']['mngradusergroup.php'] = "การกำหนดค่าผู้ใช้-กลุ่ม";
$l['Intro']['mngradusergroupnew.php'] = "การแมปผู้ใช้-กลุ่มใหม่";
$l['Intro']['mngradusergrouplist'] = "การแมปผู้ใช้-กลุ่มในฐานข้อมูล";
$l['Intro']['mngradusergrouplistuser'] = "การแมปผู้ใช้-กลุ่มในฐานข้อมูล";
$l['Intro']['mngradusergroupedit'] = "แก้ไขการแมปผู้ใช้-กลุ่มสำหรับผู้ใช้:";

$l['Intro']['mngradippool.php'] = "การกำหนดค่า IP-Pool";
$l['Intro']['mngradippoolnew.php'] = "IP-Pool ใหม่";
$l['Intro']['mngradippoollist.php'] = "รายการ IP-Pools";
$l['Intro']['mngradippooledit.php'] = "แก้ไข IP-Pool";
$l['Intro']['mngradippooldel.php'] = "ลบ IP-Pool";

$l['Intro']['mngradnas.php'] = "การกำหนดค่า NAS";
$l['Intro']['mngradnasnew.php'] = "บันทึก NAS ใหม่";
$l['Intro']['mngradnaslist.php'] = "รายการ NAS ในฐานข้อมูล";
$l['Intro']['mngradnasedit.php'] = "แก้ไขบันทึก NAS";
$l['Intro']['mngradnasdel.php'] = "ลบบันทึก NAS";

$l['Intro']['mngradhunt.php'] = "การกำหนดค่า HuntGroup";
$l['Intro']['mngradhuntnew.php'] = "บันทึก HuntGroup ใหม่";
$l['Intro']['mngradhuntlist.php'] = "รายการ HuntGroup ในฐานข้อมูล";
$l['Intro']['mngradhuntedit.php'] = "แก้ไขบันทึก HuntGroup";
$l['Intro']['mngradhuntdel.php'] = "ลบบันทึก HuntGroup";

$l['Intro']['mngradprofiles.php'] = "การกำหนดค่าโปรไฟล์";
$l['Intro']['mngradprofilesedit.php'] = "แก้ไขโปรไฟล์";
$l['Intro']['mngradprofilesduplicate.php'] = "ทำสำเนาโปรไฟล์";
$l['Intro']['mngradprofilesdel.php'] = "ลบโปรไฟล์";
$l['Intro']['mngradprofileslist.php'] = "รายการโปรไฟล์";
$l['Intro']['mngradprofilesnew.php'] = "โปรไฟล์ใหม่";

$l['Intro']['mngradgroups.php'] = "การกำหนดค่ากลุ่ม";

$l['Intro']['mngradgroupreplynew.php'] = "การแมปการตอบกลับกลุ่มใหม่";
$l['Intro']['mngradgroupreplylist.php'] = "การแมปการตอบกลับกลุ่มในฐานข้อมูล";
$l['Intro']['mngradgroupreplyedit.php'] = "แก้ไขการแมปการตอบกลับกลุ่มสำหรับกลุ่ม:";
$l['Intro']['mngradgroupreplydel.php'] = "ลบการแมปการตอบกลับกลุ่ม";
$l['Intro']['mngradgroupreplysearch.php'] = "ค้นหาการแมปการตอบกลับกลุ่ม";

$l['Intro']['mngradgroupchecknew.php'] = "การแมปการตรวจสอบกลุ่มใหม่";
$l['Intro']['mngradgroupchecklist.php'] = "การแมปการตรวจสอบกลุ่มในฐานข้อมูล";
$l['Intro']['mngradgroupcheckedit.php'] = "แก้ไขการแมปการตรวจสอบกลุ่มสำหรับกลุ่ม:";
$l['Intro']['mngradgroupcheckdel.php'] = "ลบการแมปการตรวจสอบกลุ่ม";
$l['Intro']['mngradgroupchecksearch.php'] = "ค้นหาการแมปการตรวจสอบกลุ่ม";

$l['Intro']['configuser.php'] = "การกำหนดค่าผู้ใช้";
$l['Intro']['configmail.php'] = "การกำหนดค่าอีเมล";
$l['Intro']['configcrontab.php'] = "การกำหนดค่างานที่เกิดซ้ำ";
$l['Intro']['configdb.php'] = "การกำหนดค่าฐานข้อมูล";
$l['Intro']['configlang.php'] = "การกำหนดค่าภาษา";
$l['Intro']['configlogging.php'] = "การกำหนดค่าการบันทึก";
$l['Intro']['configinterface.php'] = "ตั้งค่าหน้าจอใช้งาน";
$l['Intro']['configmainttestuser.php'] = "ทดสอบการเชื่อมต่อผู้ใช้";
$l['Intro']['configmain.php'] = "การกำหนดค่าระบบ";
$l['Intro']['configmaint.php'] = "การบำรุงรักษา";
$l['Intro']['configmaintdisconnectuser.php'] = "ตัดการเชื่อมต่อผู้ใช้";
$l['Intro']['configbusiness.php'] = "รายละเอียดธุรกิจ";
$l['Intro']['configbusinessinfo.php'] = "ข้อมูลธุรกิจ";
$l['Intro']['configbackup.php'] = "สำรองข้อมูล";
$l['Intro']['configbackupcreatebackups.php'] = "สร้างสำรองข้อมูล";
$l['Intro']['configbackupmanagebackups.php'] = "จัดการสำรองข้อมูล";

$l['Intro']['configoperators.php'] = "ตั้งค่าผู้ดูแลระบบ";
$l['Intro']['configoperatorsdel.php'] = "ลบผู้ดูแลระบบ";
$l['Intro']['configoperatorsedit.php'] = "แก้ไขผู้ดูแลระบบ";
$l['Intro']['configoperatorsnew.php'] = "เพิ่มผู้ดูแลระบบใหม่";
$l['Intro']['configoperatorslist.php'] = "แสดงรายชื่อผู้ดูแลระบบ";

$l['Intro']['login.php'] = "เข้าสู่ระบบ";

// --------------------------------------------------
$l['Intro']['reponline.php'] = "ผู้ใช้งานที่กำลังออนไลน์";
// --------------------------------------------------

$l['captions']['providebillratetodel'] = "ระบุรายการประเภทอัตราที่คุณต้องการลบ";
$l['captions']['detailsofnewrate'] = "คุณสามารถกรอกรายละเอียดด้านล่างสำหรับอัตราใหม่";
$l['captions']['filldetailsofnewrate'] = "กรอกรายละเอียดด้านล่างสำหรับรายการอัตราใหม่";

/* **********************************************************************************
 * Help Pages Info
 * Each page has a header which is the Intro class, when clicking on the header
 * it will reveal/hide a helpPage div content which is a description of a specific
 * page, basically your expanded tool-tip.
 ************************************************************************************/

$l['helpPage']['configdashboard'] = "การตั้งค่าแดชบอร์ด";

$l['helpPage']['repnewusers'] = "ตารางต่อไปนี้แสดงรายการผู้ใช้ใหม่ที่สร้างในแต่ละเดือน";

$l['helpPage']['login'] = "";

$l['helpPage']['billpaypaltransactions'] = "แสดงรายการธุรกรรม PayPal ทั้งหมด";
$l['helpPage']['billhistoryquery'] = "แสดงรายการประวัติการเรียกเก็บเงินทั้งหมดสำหรับผู้ใช้";

$l['helpPage']['billinvoicereport'] = "";

$l['helpPage']['billinvoicelist'] = "";
$l['helpPage']['billinvoicenew'] = "";
$l['helpPage']['billinvoiceedit'] = "";
$l['helpPage']['billinvoicedel'] = "";

$l['helpPage']['paymenttypeslist'] = "";
$l['helpPage']['paymenttypesnew'] = "";
$l['helpPage']['paymenttypesedit'] = "";
$l['helpPage']['paymenttypesdel'] = "";
$l['helpPage']['paymenttypesdate'] = "";

$l['helpPage']['paymentslist'] = "";
$l['helpPage']['paymentsnew'] = "";
$l['helpPage']['paymentsedit'] = "";
$l['helpPage']['paymentsdel'] = "";
$l['helpPage']['paymentsdate'] = "";

$l['helpPage']['billplanslist'] = "";
$l['helpPage']['billplansnew'] = "";
$l['helpPage']['billplansedit'] = "";
$l['helpPage']['billplansdel'] = "";

$l['helpPage']['billposlist'] = "";
$l['helpPage']['billposnew'] = "";
$l['helpPage']['billposedit'] = "";
$l['helpPage']['billposdel'] = "";

$l['helpPage']['billrateslist'] = "";
$l['helpPage']['billratesnew'] = "";
$l['helpPage']['billratesedit'] = "";
$l['helpPage']['billratesdel'] = "";
$l['helpPage']['billratesdate'] = "";

$l['helpPage']['mngradproxys'] = "";
$l['helpPage']['mngradproxyslist'] = "";
$l['helpPage']['mngradproxysnew'] = "";
$l['helpPage']['mngradproxysedit'] = "";
$l['helpPage']['mngradproxysdel'] = "";

$l['helpPage']['mngradrealms'] = "";
$l['helpPage']['mngradrealmslist'] = "";
$l['helpPage']['mngradrealmsnew'] = "";
$l['helpPage']['mngradrealmsedit'] = "";
$l['helpPage']['mngradrealmsdel'] = "";

$l['helpPage']['mngradattributes'] = "";
$l['helpPage']['mngradattributeslist'] = "";
$l['helpPage']['mngradattributesnew'] = "";
$l['helpPage']['mngradattributesedit'] = "";
$l['helpPage']['mngradattributessearch'] = "";
$l['helpPage']['mngradattributesdel'] = "";
$l['helpPage']['mngradattributesimport'] = "";
$l['helpPage']['mngimportusers'] = "";

$l['helpPage']['msgerrorpermissions'] = "ขออภัย คุณไม่มีสิทธิ์ที่จำเป็นในการเข้าถึงพื้นที่นี้<br>โปรดติดต่อผู้ดูแลระบบ";

$l['helpPage']['mngradusergroup'] = "";
$l['helpPage']['mngradusergroupdel'] = "หากต้องการลบรายการผู้ใช้จากฐานข้อมูล คุณต้องระบุชื่อผู้ใช้ของบัญชี";
$l['helpPage']['mngradusergroupnew'] = "";
$l['helpPage']['mngradusergrouplist'] = "";
$l['helpPage']['mngradusergrouplistuser'] = "";
$l['helpPage']['mngradusergroupedit'] = "";

// profiles help pages
$l['helpPage']['mngradprofilesnew'] = <<<EOF
<h2 class="fs-6">โปรไฟล์ใหม่</h2>
<p>ใช้ฟีเจอร์นี้เพื่อสร้างโปรไฟล์ใหม่ คุณจะต้องระบุแอตทริบิวต์ Reply และ Check ที่ควรเชื่อมโยงกับโปรไฟล์ เมื่อคุณสร้างโปรไฟล์แล้ว โปรไฟล์จะพร้อมใช้งานโดยผู้ใช้ในระบบ</p>
EOF;
$l['helpPage']['mngradprofileslist'] = <<<EOF
<h2 class="fs-6">รายการโปรไฟล์</h2>
<p>ฟีเจอร์นี้ช่วยให้คุณดูรายการโปรไฟล์ทั้งหมดที่มีอยู่ในระบบ คุณสามารถเลือกโปรไฟล์เพื่อดูรายละเอียด หรือเพื่อแก้ไขหรือลบ</p>
EOF;
$l['helpPage']['mngradprofiles'] = <<<EOF
<h1 class="fs-5">การจัดการโปรไฟล์</h1>
<p>โปรไฟล์ใช้เพื่อจัดการชุดของ Reply Attributes และ Check Attributes สำหรับผู้ใช้<br>
โดยพื้นฐานแล้ว โปรไฟล์คือการรวมกันของ Group Reply และ Group Check</p>
EOF;
$l['helpPage']['mngradprofilesedit'] = <<<EOF
<h2 class="fs-6">แก้ไขโปรไฟล์</h2>
<p>หากคุณต้องการเปลี่ยนแปลงโปรไฟล์ที่มีอยู่ คุณสามารถใช้ฟีเจอร์นี้ คุณจะสามารถแก้ไข Reply และ Check attributes ที่เกี่ยวข้องกับโปรไฟล์</p>
EOF;
$l['helpPage']['mngradprofilesduplicate'] = <<<EOF
<h2 class="fs-6">ทำสำเนาโปรไฟล์</h2>
<p>ฟีเจอร์นี้ช่วยให้คุณสร้างโปรไฟล์ใหม่อย่างรวดเร็วโดยอิงจากโปรไฟล์ที่มีอยู่
   เพียงเลือกโปรไฟล์ที่คุณต้องการทำสำเนา ระบุชื่อใหม่สำหรับโปรไฟล์ที่ทำสำเนา และคลิกที่ปุ่ม "ทำสำเนา"
   โปรไฟล์ใหม่จะมี Reply Attributes และ Check Attributes เหมือนกับโปรไฟล์ต้นฉบับ ช่วยให้คุณสามารถทำการปรับเปลี่ยนได้อย่างง่ายดายตามต้องการ</p>
EOF;
$l['helpPage']['mngradprofilesdel'] = <<<EOF
<h2 class="fs-6">ลบโปรไฟล์</h2>
<p>หากคุณไม่ต้องการโปรไฟล์อีกต่อไป คุณสามารถลบโดยใช้ฟีเจอร์นี้ โปรดทราบว่าการลบโปรไฟล์จะลบการเชื่อมโยงระหว่างโปรไฟล์และผู้ใช้ในระบบด้วย</p>
EOF;

$l['helpPage']['mngradprofiles'] .= $l['helpPage']['mngradprofilesnew'] . $l['helpPage']['mngradprofileslist']
                                  . $l['helpPage']['mngradprofilesedit'] . $l['helpPage']['mngradprofilesduplicate']
                                  . $l['helpPage']['mngradprofilesdel'];

// group check/reply help pages
$l['helpPage']['mngradgroupchecknew'] = <<<EOF
<h2 class="fs-6">เพิ่มการแมป Group Reply/Check ใหม่</h2>
<p>สร้างการแมป Group Reply/Check ใหม่ได้อย่างง่ายดายด้วยอินเทอร์เฟซที่ใช้งานง่าย</p>
EOF;
$l['helpPage']['mngradgroupreplynew'] = $l['helpPage']['mngradgroupchecknew'];

$l['helpPage']['mngradgroupchecklist'] = <<<EOF
<h2 class="fs-6">รายการการแมป Group Reply/Check</h2>
<p>ดูรายการการแมป Group Reply/Check ที่มีอยู่ทั้งหมดอย่างรวดเร็ว</p>
EOF;
$l['helpPage']['mngradgroupreplylist'] = $l['helpPage']['mngradgroupchecklist'];

$l['helpPage']['mngradgroupchecksearch'] = <<<EOF
<h2 class="fs-6">ค้นหาการแมป Group Reply/Check</h2>
<p>ค้นหาการแมป Group Reply/Check ที่เฉพาะเจาะจงโดยใช้ชื่อ แอตทริบิวต์ หรือค่า ตัวอักษรไวด์การ์ดจะถูกเพิ่มโดยอัตโนมัติเป็นคำต่อท้ายของข้อความค้นหาเพื่อช่วยปรับแต่งผลการค้นหาของคุณ</p>
EOF;
$l['helpPage']['mngradgroupreplysearch'] = $l['helpPage']['mngradgroupchecksearch'];

$l['helpPage']['mngradgroupcheckedit'] = <<<EOF
<h2 class="fs-6">แก้ไขการแมป Group Reply/Check</h2>
<p>ทำการแก้ไขการแมป Group Reply/Check ที่มีอยู่เพื่อให้แน่ใจว่าเครือข่ายของคุณทำงานอย่างมีประสิทธิภาพ</p>
EOF;
$l['helpPage']['mngradgroupreplyedit'] = $l['helpPage']['mngradgroupcheckedit'];

$l['helpPage']['mngradgroupcheckdel'] = <<<EOF
<h2 class="fs-6">ลบการแมป Group Reply/Check</h2>
<p>ลบการแมป Group Reply/Check ที่ไม่จำเป็นเพื่อรักษาฐานข้อมูลของคุณให้ทันสมัยและเป็นระเบียบ</p>
EOF;
$l['helpPage']['mngradgroupreplydel'] = $l['helpPage']['mngradgroupcheckdel'];

$l['helpPage']['mngradgroups'] = <<<EOF
<h1 class="fs-5">การจัดการกลุ่ม</h1>
<p>จัดการการแมป Group Reply และ Group Check ภายในตาราง radgroupreply/radgroupcheck อย่างมีประสิทธิภาพ</p>
EOF;
$l['helpPage']['mngradgroups'] .= $l['helpPage']['mngradgroupreplynew'] . $l['helpPage']['mngradgroupreplylist']
                                . $l['helpPage']['mngradgroupchecksearch'] . $l['helpPage']['mngradgroupcheckedit']
                                . $l['helpPage']['mngradgroupcheckdel'];

// ip pool help pages
$l['helpPage']['mngradippoolnew'] = <<<EOF
<h2 class="fs-6">IP Pool ใหม่</h2>
<p>เพิ่มที่อยู่ไอพีใหม่ไปยัง IP Pool ที่กำหนดค่าไว้แล้ว</p>
EOF;
$l['helpPage']['mngradippoollist'] = <<<EOF
<h2 class="fs-6">รายการ IP Pools</h2>
<p>แสดงรายการ IP Pools ที่กำหนดค่าไว้ทั้งหมดและที่อยู่ไอพีที่กำหนด</p>
EOF;
$l['helpPage']['mngradippooledit'] = <<<EOF
<h2 class="fs-6">แก้ไข IP Pool</h2>
<p>แก้ไขที่อยู่ไอพีสำหรับ IP Pool ที่กำหนดค่าไว้แล้ว</p>
EOF;
$l['helpPage']['mngradippooldel'] = <<<EOF
<h2 class="fs-6">ลบ IP Pool</h2>
<p>ลบที่อยู่ไอพีจาก IP Pool ที่กำหนดค่าไว้แล้ว</p>
EOF;

$l['helpPage']['mngradippool'] = <<<EOF
<h1 class="fs-5">การจัดการ IP pools</h1>
<p>IP pools เป็นกลุ่มของที่อยู่ไอพีที่สามารถกำหนดให้กับอุปกรณ์ เครื่องเสมือน หรือแอปพลิเคชันต่างๆ ภายในเครือข่าย การจัดการ IP pools มีความสำคัญเพื่อให้แน่ใจว่ามีที่อยู่ไอพีเพียงพอสำหรับอุปกรณ์ทั้งหมดที่ต้องการ พร้อมทั้งหลีกเลี่ยงการใช้ที่อยู่ไอพีที่ซ้ำกันหรือไม่ถูกต้อง</p>
EOF;

$l['helpPage']['mngradippool'] .= $l['helpPage']['mngradippoolnew'] . $l['helpPage']['mngradippoollist']
                                . $l['helpPage']['mngradippooledit'] . $l['helpPage']['mngradippooldel'];

// nas help pages
$l['helpPage']['mngradnas'] = "";
$l['helpPage']['mngradnasdel'] = "หากต้องการลบรายการ nas ip/host จากฐานข้อมูล คุณต้องระบุ ip/host ของบัญชี";
$l['helpPage']['mngradnasnew'] = "";
$l['helpPage']['mngradnaslist'] = "";
$l['helpPage']['mngradnasedit'] = "";

// huntgroup help pages
$l['helpPage']['mngradhunt'] = <<<EOF
<p>ก่อนเริ่มทำงานกับ HuntGroup โปรดอ่าน <a href="https://wiki.freeradius.org/guide/SQL-Huntgroup-HOWTO" target="_blank">SQL_Huntgroup_HOWTO</a> บน FreeRADIUS wiki</p>
<p>โดยเฉพาะ:</p>
<p><i>ค้นหาส่วน authorize ในไฟล์กำหนดค่า radiusd.conf หรือ sites-enabled/default ของคุณและแก้ไข ที่ด้านบนของส่วน authorize หลังจากโมดูล preprocess ให้แทรกบรรทัดเหล่านี้:</i></p>
<pre>
update request {
    Huntgroup-Name := "%{sql:select groupname from radhuntgroup where nasipaddress=\"%{NAS-IP-Address}\"}"
}
</pre>
<p><i>สิ่งที่ทำคือดำเนินการค้นหาในตาราง radhuntgroup โดยใช้ที่อยู่ไอพีเป็นคีย์เพื่อส่งคืนชื่อ huntgroup จากนั้นจะเพิ่มคู่ attribute/value ในคำขอที่ชื่อของ attribute คือ Huntgroup-Name และค่าคือสิ่งที่ส่งคืนจากการสอบถาม SQL หากการสอบถามไม่พบอะไร ค่าจะเป็นสตริงว่าง</i></p>
EOF;

$l['helpPage']['mngradhuntdel'] = "หากต้องการลบรายการ huntgroup จากฐานข้อมูล คุณต้องระบุ ip/host และ port id ของ huntgroup";
$l['helpPage']['mngradhuntnew'] = "";
$l['helpPage']['mngradhuntlist'] = "";
$l['helpPage']['mngradhuntedit'] = "";

// hotspots help pages
$l['helpPage']['mnghsdel'] = "หากต้องการลบ Hotspotsจากฐานข้อมูล คุณต้องระบุชื่อของ Hotspots<br/>";
$l['helpPage']['mnghsedit'] = "คุณสามารถแก้ไขรายละเอียดด้านล่างสำหรับ Hotspots<br/>";
$l['helpPage']['mnghsnew'] = "คุณสามารถกรอกรายละเอียดด้านล่างสำหรับการเพิ่ม Hotspotsใหม่ในฐานข้อมูล";
$l['helpPage']['mnghslist'] = "รายการ Hotspotsทั้งหมดในฐานข้อมูล คุณสามารถใช้ลิงก์ด่วนเพื่อแก้ไขหรือลบ Hotspotsจากฐานข้อมูล";

$l['helpPage']['configuser'] = <<<EOF
<h2 class="fs-6">การตั้งค่าผู้ใช้</h2>
<p>เลือกว่าจะอนุญาตรหัสผ่านแบบข้อความธรรมดาในฐานข้อมูลหรือไม่ และตัวอักษรใดที่อนุญาตสำหรับการสร้างรหัสผ่านและ/หรือชื่อผู้ใช้แบบสุ่ม</p>
EOF;

$l['helpPage']['configdb_short'] = <<<EOF
<h2 class="fs-6">การตั้งค่าฐานข้อมูล</h2>
<p>กำหนดค่าเอนจินฐานข้อมูล การตั้งค่าการเชื่อมต่อ และชื่อตารางหากไม่ใช้ค่าเริ่มต้น</p>
EOF;

$l['helpPage']['configdb'] = $l['helpPage']['configdb_short'];
$l['helpPage']['configdb'] .= <<<EOF
<h3 class="fs-6">การตั้งค่าทั่วไป</h3>
<p>เลือกเอนจินจัดเก็บข้อมูลฐานข้อมูล</p>
<h3 class="fs-6">การตั้งค่าตาราง</h3>
<p>หากไม่ใช้สคีมา FreeRADIUS เริ่มต้น คุณสามารถเปลี่ยนชื่อตาราง</p>
EOF;

$l['helpPage']['configlang'] = <<<EOF
<h2 class="fs-6">การตั้งค่าภาษา</h2>
<p>กำหนดค่าภาษาของอินเทอร์เฟซ</p>
EOF;

$l['helpPage']['configcrontab'] = <<<EOF
<p>ส่วนนี้ช่วยให้คุณกำหนดค่าการตรวจสอบและการแจ้งเตือนต่างๆ ที่เกี่ยวข้องกับเซสชันและปริมาณข้อมูลภายในระบบ<br>
ช่วยให้คุณปรับพารามิเตอร์ต่างๆ เช่น ช่วงเวลาตรวจจับเซสชันที่ค้าง การตั้งค่าการตรวจสอบโหนด เกณฑ์การตรวจสอบปริมาณข้อมูลผู้ใช้
และการกำหนดค่าการแจ้งเตือนทางอีเมล ส่วนนี้จัดระเบียบเป็นแท็บ โดยแต่ละแท็บมุ่งเน้นไปที่แง่มุมเฉพาะของความสามารถในการตรวจสอบและการแจ้งเตือนของระบบ
โดยเฉพาะ คุณสามารถเปิดหรือปิดการตรวจสอบ ตั้งค่าเกณฑ์ และกำหนดค่าผู้รับอีเมลสำหรับการแจ้งเตือน
นอกจากนี้ยังมีแท็บสำหรับดูเอาต์พุตของการกำหนดค่า crontab ของระบบ
เพื่อให้เห็นภาพงานที่กำหนดเวลาไว้ที่เกี่ยวข้องกับการตรวจสอบและการบำรุงรักษา</p>

<h3 class="fs-6">เซสชันที่ค้าง</h3>
<p>Interval และ Grace ใช้ในการคำนวณเกณฑ์เวลา สำคัญที่ต้องแน่ใจว่าเกณฑ์เวลาถูกตั้งค่าให้เหมาะสมกับ <strong>Acct-Interim-Interval</strong> 
โดยเฉพาะเพื่อให้แน่ใจว่ามีค่ามากกว่า Acct-Interim-Interval เพื่อหลีกเลี่ยงการยุติเซสชันก่อนเวลาอันควร</p>
EOF;

$l['helpPage']['configlogging'] = <<<EOF
<h2 class="fs-6">ฟอร์มการกำหนดค่า daloRADIUS</h2>
<p>ส่วนนี้ช่วยให้คุณกำหนดค่าการตั้งค่าการบันทึกสำหรับ daloRADIUS และตัวเลือกการบันทึกอื่นๆ</p>
<h2 class="fs-6">การตั้งค่าการบันทึก daloRADIUS</h2>
<ul>
    <li><strong>{$l['all']['PagesLogging']}:</strong> เปิดหรือปิดการบันทึกการเข้าชมหน้า</li>
    <li><strong>{$l['all']['QueriesLogging']}:</strong> เปิดหรือปิดการบันทึกการสอบถาม</li>
    <li><strong>{$l['all']['ActionsLogging']}:</strong> เปิดหรือปิดการบันทึกการกระทำ เช่น การส่งฟอร์ม</li>
    <li><strong>{$l['all']['LoggingDebugInfo']}:</strong> เปิดหรือปิดการบันทึกข้อมูลดีบัก</li>
    <li><strong>{$l['all']['LoggingDebugOnPages']}:</strong> เปิดหรือปิดการบันทึกข้อมูลดีบักโดยเฉพาะบนหน้า</li>
    <li><strong>daloRADIUS {$l['all']['FilenameLogging']}:</strong> ระบุเส้นทางแบบสัมบูรณ์สำหรับไฟล์บันทึก<br>
        ตัวอย่าง: <code>/var/www/daloradius/var/log/daloradius.log</code></li>
</ul>
<h2 class="fs-6">การตั้งค่าการบันทึกอื่นๆ</h2>
<ul>
    <li><strong>SYSLOG {$l['all']['FilenameLogging']}:</strong> ระบุเส้นทางแบบสัมบูรณ์สำหรับไฟล์บันทึก SYSLOG<br>
        ตัวอย่าง: <code>/var/log/syslog</code></li>
    <li><strong>RADIUSLOG {$l['all']['FilenameLogging']}:</strong> ระบุเส้นทางแบบสัมบูรณ์สำหรับไฟล์บันทึก RADIUSLOG
        ตัวอย่าง: <code>/var/log/freeradius/radius.log</code></li>
    <li><strong>BOOTLOG {$l['all']['FilenameLogging']}:</strong> ระบุเส้นทางแบบสัมบูรณ์สำหรับไฟล์บันทึก BOOTLOG
        ตัวอย่าง: <code>/var/log/boot.log</code></li>
</ul>
EOF;

$l['helpPage']['configinterface'] = <<<EOF
<h2 class="fs-6">การตั้งค่าอินเทอร์เฟซ</h2>
<p>กำหนดค่าการตั้งค่าเค้าโครงและพฤติกรรมของอินเทอร์เฟซ</p>
EOF;

$l['helpPage']['configmail'] = <<<EOF
<h2 class="fs-6">การกำหนดค่าการตั้งค่าอีเมล</h2>
<div id="help-text">
  <div class="help-item">
    <strong>เปิดใช้งาน:</strong>
    <p>เลือกว่าจะเปิดหรือปิดใช้งานไคลเอนต์ SMTP สำหรับการส่งอีเมล</p>
  </div>

  <div class="help-item">
    <strong>ที่อยู่เซิร์ฟเวอร์ SMTP:</strong>
    <p>ป้อนที่อยู่ของเซิร์ฟเวอร์ SMTP ของคุณ<br>นี่คือเซิร์ฟเวอร์ที่รับผิดชอบในการส่งอีเมลของคุณ</p>
  </div>

  <div class="help-item">
    <strong>พอร์ตเซิร์ฟเวอร์ SMTP:</strong>
    <p>ระบุหมายเลขพอร์ตที่ใช้โดยเซิร์ฟเวอร์ SMTP ค่าเริ่มต้นคือ 25</p>
  </div>

  <div class="help-item">
    <strong>ความปลอดภัย SMTP:</strong>
    <p>เลือกโปรโตคอลความปลอดภัยสำหรับการเชื่อมต่อ SMTP<br>เลือก 'none' สำหรับไม่มีความปลอดภัย หรือ 'tls' สำหรับการเข้ารหัส TLS</p>
  </div>

  <div class="help-item">
    <strong>ที่อยู่อีเมลผู้ส่ง:</strong>
    <p>ระบุที่อยู่อีเมลที่จะใช้เป็นผู้ส่งอีเมล</p>
  </div>

  <div class="help-item">
    <strong>ชื่อผู้ส่ง:</strong>
    <p>ป้อนชื่อที่เกี่ยวข้องกับที่อยู่อีเมลผู้ส่ง<br>ใช้เฉพาะตัวอักษร ตัวเลข และช่องว่าง</p>
  </div>

  <div class="help-item">
    <strong>คำนำหน้าหัวเรื่อง:</strong>
    <p>ตั้งคำนำหน้าสำหรับหัวเรื่องอีเมล<br>อนุญาตให้ใช้ตัวอักษร ตัวเลข ช่องว่าง และวงเล็บเหลี่ยม</p>
  </div>

  <div class="help-item">
    <strong>ชื่อผู้ใช้และรหัสผ่าน SMTP:</strong>
    <p>ระบุชื่อผู้ใช้และรหัสผ่านสำหรับการยืนยันตัวตน SMTP หากจำเป็น<br>ปล่อยทั้งสองฟิลด์ว่างเพื่อข้ามการยืนยันตัวตน</p>
  </div>

  <small><strong>หมายเหตุ:</strong> อย่าลืมคลิก "นำไปใช้" หลังจากทำการเปลี่ยนแปลงเพื่อบันทึกการกำหนดค่าของคุณ</small>
</div>
EOF;

$l['helpPage']['configmaint'] = <<<EOF
<h1 class="fs-5">การบำรุงรักษา</h1>
<h6>ทดสอบการเชื่อมต่อผู้ใช้</h6>
<p>ส่ง Access-Request ไปยังเซิร์ฟเวอร์ RADIUS เพื่อตรวจสอบว่าข้อมูลรับรองของผู้ใช้ถูกต้องหรือไม่</p>
<h6>ตัดการเชื่อมต่อผู้ใช้</h6>
<p>ส่งแพ็กเก็ต PoD (Packet of Disconnect) หรือ CoA (Change of Authority) ไปยังเซิร์ฟเวอร์ NAS เพื่อตัดการเชื่อมต่อผู้ใช้และยุติเซสชันของพวกเขาใน NAS ที่กำหนด</p>
EOF;

$l['helpPage']['configmainttestuser'] = <<<EOF
<h1 class="fs-5">ทดสอบการเชื่อมต่อผู้ใช้</h1>
<p>ส่ง Access-Request ไปยังเซิร์ฟเวอร์ RADIUS เพื่อตรวจสอบว่าข้อมูลรับรองของผู้ใช้ถูกต้องหรือไม่</p>
<p>daloRADIUS ใช้ยูทิลิตีไบนารี radclient เพื่อดำเนินการทดสอบและส่งคืนผลลัพธ์ของคำสั่งหลังจากเสร็จสิ้น</p>
<p>daloRADIUS อาศัยไบนารี radclient ที่พร้อมใช้งานในตัวแปร <code>\$PATH</code> สภาพแวดล้อมของคุณ หากไม่มี โปรดแก้ไขไฟล์ <code>library/extensions/maintenance_radclient.php</code></p>
<p>โปรดทราบว่าอาจใช้เวลาสักครู่เพื่อให้การทดสอบเสร็จสิ้น (ถึงหลายวินาที [10-20 วินาทีหรือมากกว่า]) เนื่องจากความล้มเหลวและ radclient จะส่งแพ็กเก็ตอีกครั้ง</p>
<p>ในแท็บขั้นสูง สามารถปรับแต่งตัวเลือกสำหรับการทดสอบ:</p>
<ul>
<li>Timeout - รอ 'timeout' วินาทีก่อนลองใหม่ (อาจเป็นตัวเลขทศนิยม)</li>
<li>Retries - หากหมดเวลา ลองส่งแพ็กเก็ตใหม่ 'retries' ครั้ง</li>
<li>Count - ส่งแต่ละแพ็กเก็ต 'count' ครั้ง</li>
<li>Requests - ส่ง 'num' แพ็กเก็ตจากไฟล์แบบคู่ขนาน</li>
</ul>
EOF;

$l['helpPage']['configmaintdisconnectuser'] = <<<EOF
<h1 class="fs-5">ตัดการเชื่อมต่อผู้ใช้</h1>
<p>ส่งแพ็กเก็ต PoD (Packet of Disconnect) หรือ CoA (Change of Authority) ไปยังเซิร์ฟเวอร์ NAS เพื่อตัดการเชื่อมต่อผู้ใช้และยุติเซสชันของเขา/เธอใน NAS ที่กำหนด</p>
<p>สำหรับการยุติเซสชันของผู้ใช้ จำเป็นต้องให้ NAS รองรับประเภทแพ็กเก็ต PoD หรือ CoA โปรดปรึกษาผู้จำหน่าย NAS หรือเอกสารประกอบของคุณ นอกจากนี้ จำเป็นต้องทราบพอร์ต NAS สำหรับแพ็กเก็ต PoD หรือ CoA โดย NAS ที่ใหม่กว่าใช้พอร์ต 3799 ในขณะที่ NAS อื่นๆ ถูกกำหนดค่าให้รับแพ็กเก็ตบนพอร์ต 1700</p>
<p>daloRADIUS ใช้ยูทิลิตีไบนารี radclient เพื่อดำเนินการทดสอบและส่งคืนผลลัพธ์ของคำสั่งหลังจากเสร็จสิ้น</p>
<p>daloRADIUS นับบนไบนารี radclient ที่พร้อมใช้งานในตัวแปร <code>\$PATH</code> สภาพแวดล้อมของคุณ หากไม่มี โปรดแก้ไขไฟล์ <code>library/extensions/maintenance_radclient.php</code></p>
<p>โปรดทราบว่าอาจใช้เวลาสักครู่เพื่อให้การทดสอบเสร็จสิ้น (ถึงหลายวินาที [10-20 วินาทีหรือมากกว่า]) เนื่องจากความล้มเหลวและ radclient จะส่งแพ็กเก็ตอีกครั้ง</p>
<p>ในแท็บขั้นสูง สามารถปรับแต่งตัวเลือกสำหรับการทดสอบ:</p>
<ul>
<li>Timeout - รอ 'timeout' วินาทีก่อนลองใหม่ (อาจเป็นตัวเลขทศนิยม)</li>
<li>Retries - หากหมดเวลา ลองส่งแพ็กเก็ตใหม่ 'retries' ครั้ง</li>
<li>Count - ส่งแต่ละแพ็กเก็ต 'count' ครั้ง</li>
<li>Requests - ส่ง 'num' แพ็กเก็ตจากไฟล์แบบคู่ขนาน</li>
</ul>
EOF;

$l['helpPage']['configoperators'] = <<<EOF
<h1 class="fs-5">ผู้ดำเนินการ</h1>
<p>กำหนดค่าการตั้งค่าและพฤติกรรมของผู้ดำเนินการ</p>
EOF;

$l['helpPage']['configoperatorsdel'] = "หากต้องการลบผู้ดำเนินการจากฐานข้อมูล คุณต้องระบุชื่อผู้ใช้";
$l['helpPage']['configoperatorsedit'] = "แก้ไขรายละเอียดผู้ใช้ผู้ดำเนินการด้านล่าง";
$l['helpPage']['configoperatorsnew'] = "คุณสามารถกรอกรายละเอียดด้านล่างสำหรับการเพิ่มผู้ใช้ผู้ดำเนินการใหม่ในฐานข้อมูล";
$l['helpPage']['configoperatorslist'] = "แสดงรายการผู้ดำเนินการทั้งหมดในฐานข้อมูล";

$l['helpPage']['configbackup'] = <<<EOF
<h1 class="fs-5">สำรองข้อมูล</h1>
<p>จัดการการสำรองข้อมูลฐานข้อมูล</p>
EOF;
$l['helpPage']['configbackupcreatebackups'] = "สร้างสำรองข้อมูล";
$l['helpPage']['configbackupmanagebackups'] = "จัดการสำรองข้อมูล";

$l['helpPage']['configmain'] = <<<EOF
<h1 class="fs-5">การตั้งค่าทั่วไป</h1>
EOF;
$l['helpPage']['configmain'] .= $l['helpPage']['configuser'] . $l['helpPage']['configdb_short']
                              . $l['helpPage']['configlang'] . $l['helpPage']['configlogging']
                              . $l['helpPage']['configinterface'] . $l['helpPage']['configmail']
                              . $l['helpPage']['configmaint'] . $l['helpPage']['configoperators']
                              . $l['helpPage']['configbackup'];

// graphs help pages
$l['helpPage']['graphsalltimelogins'] = <<<EOF
<h2 class="fs-6">การเข้าสู่ระบบ/ฮิตตลอดเวลา</h2>
<p>สร้างแผนภูมิกราฟิกแสดงจำนวนการเข้าสู่ระบบไปยังเซิร์ฟเวอร์ตลอดช่วงเวลาที่กำหนด</p>
EOF;
$l['helpPage']['graphsoveralldownload'] = <<<EOF
<h2 class="fs-6">สถิติการดาวน์โหลดโดยรวม</h2>
<p>สร้างแผนภูมิกราฟิกแสดงจำนวนข้อมูลที่ดาวน์โหลดโดยผู้ใช้ที่เฉพาะเจาะจงตลอดช่วงเวลาที่กำหนด แผนภูมิจะมาพร้อมกับตารางรายการ</p>
EOF;
$l['helpPage']['graphsoverallupload'] = <<<EOF
<h2 class="fs-6">สถิติการอัปโหลดโดยรวม</h2>
<p>สร้างแผนภูมิกราฟิกแสดงจำนวนข้อมูลที่อัปโหลดโดยผู้ใช้ที่เฉพาะเจาะจงตลอดช่วงเวลาที่กำหนด แผนภูมิจะมาพร้อมกับตารางรายการ</p>
EOF;
$l['helpPage']['graphsoveralllogins'] = <<<EOF
<h2 class="fs-6">การเข้าสู่ระบบ/ฮิตโดยรวม</h2>
<p>สร้างแผนภูมิกราฟิกแสดงการใช้งานของผู้ใช้ที่เฉพาะเจาะจงตลอดช่วงเวลาที่กำหนด แผนภูมิแสดงจำนวนการเข้าสู่ระบบ (หรือ 'ฮิต' ไปยัง NAS) และมาพร้อมกับตารางรายการ</p>
EOF;
$l['helpPage']['graphsalltimetrafficcompare'] = <<<EOF
<h2 class="fs-6">เปรียบเทียบปริมาณข้อมูลตลอดเวลา</h2>
<p>สร้างแผนภูมิกราฟิกเปรียบเทียบจำนวนข้อมูลที่ดาวน์โหลดและอัปโหลดตลอดช่วงเวลาที่กำหนด</p>
EOF;
$l['helpPage']['graphsloggedusers'] = <<<EOF
<h2 class="fs-6">ผู้ใช้ที่เข้าสู่ระบบ</h2>
<p>สร้างแผนภูมิกราฟิกแสดงจำนวนผู้ใช้ที่เข้าสู่ระบบตลอดช่วงเวลาที่กำหนด ผู้ใช้สามารถกรองตามวัน เดือน และปีเพื่อสร้างกราฟรายชั่วโมง หรือกรองเฉพาะเดือนและปี (เลือก "–" ในฟิลด์วัน) เพื่อกราฟจำนวนผู้ใช้ที่เข้าสู่ระบบขั้นต่ำและสูงสุดตลอดเดือนที่เลือก</p>
EOF;

$l['helpPage']['graphmain'] = '<h1 class="fs-5">กราฟ</h1>'
                            . $l['helpPage']['graphsoveralllogins'] . $l['helpPage']['graphsoveralldownload']
                            . $l['helpPage']['graphsoverallupload'] . $l['helpPage']['graphsalltimelogins']
                            . $l['helpPage']['graphsalltimetrafficcompare'] . $l['helpPage']['graphsloggedusers'];

$l['helpPage']['rephistory'] = "แสดงรายการกิจกรรมทั้งหมดที่ดำเนินการกับรายการจัดการและให้ข้อมูลเกี่ยวกับ<br/>
วันที่สร้าง สร้างโดย รวมถึงวันที่อัปเดตและประวัติอัปเดตโดย";
$l['helpPage']['replastconnect'] = "แสดงรายการความพยายามเข้าสู่ระบบทั้งหมดไปยังเซิร์ฟเวอร์ RADIUS ทั้งการเข้าสู่ระบบที่สำเร็จและล้มเหลว";
$l['helpPage']['replogsboot'] = <<<EOF
<strong>{$l['Intro']['replogsboot.php']}</strong> ช่วยให้คุณตรวจสอบบันทึกการบูตของระบบปฏิบัติการ ซึ่งเทียบเท่ากับการรันคำสั่ง <kbd>dmesg</kbd>
คุณสามารถปรับแต่งมุมมองของคุณโดยระบุจำนวนบรรทัดและใช้ตัวกรองเพื่อปรับแต่งผลลัพธ์
EOF;
$l['helpPage']['replogsdaloradius'] = <<<EOF
<strong>{$l['Intro']['replogsdaloradius.php']}</strong> ช่วยให้คุณตรวจสอบบันทึกจาก daloRADIUS
ปรับแต่งจำนวนบรรทัดและกรองบันทึกตามคิวรี ประกาศ การแทรก หรือการเลือก
EOF;
$l['helpPage']['replogsradius'] = <<<EOF
<strong>{$l['Intro']['replogsradius.php']}</strong> ช่วยให้คุณตรวจสอบบันทึกเหตุการณ์ของ freeRADIUS
โดยมีจำนวนบรรทัดที่ปรับแต่งได้และตัวกรองสำหรับประเภทข้อความ เช่น 'Auth', 'Info' หรือ 'Error'
EOF;
$l['helpPage']['replogssystem'] = <<<EOF
<strong>{$l['Intro']['replogssystem.php']}</strong> ช่วยให้คุณตรวจสอบบันทึกระบบ เช่น syslog และ messages
โดยมีจำนวนบรรทัดที่ปรับแต่งได้และตัวกรองเพิ่มเติมเพื่อปรับแต่งมุมมองของคุณ
EOF;
$l['helpPage']['rephb'] = "";
$l['helpPage']['rephbdashboard'] = "";
$l['helpPage']['repbatch'] = "";
$l['helpPage']['repbatchlist'] = "";
$l['helpPage']['mngbatchlist'] = "";
$l['helpPage']['mngbatchdel'] = "";
$l['helpPage']['repbatchdetails'] = "ให้รายละเอียดเกี่ยวกับชุดเฉพาะ";

$l['helpPage']['replogs'] = <<<EOF
<h1 class="fs-5">บันทึก</h1>
<p>{$l['helpPage']['replogsdaloradius']}</p>
<p>{$l['helpPage']['replogsradius']}</p>
<p>{$l['helpPage']['replogssystem']}</p>
<p>{$l['helpPage']['replogsboot']}</p>
EOF;

$l['helpPage']['repmain'] = <<<EOF
<h1 class="fs-5">รายงานทั่วไป</h1>
<h2 class="fs-6">ผู้ใช้ออนไลน์</h2>
<p>ให้รายการผู้ใช้ทั้งหมดที่ออนไลน์อยู่ในปัจจุบันโดยตรวจสอบตารางบัญชีในฐานข้อมูล การตรวจสอบคือสำหรับผู้ใช้ที่ไม่มีเวลาสิ้นสุด (AcctStopTime) ที่ตั้งไว้ สิ่งสำคัญคือต้องทราบว่าผู้ใช้บางส่วนอาจมีเซสชันที่ค้างเนื่องจากความล้มเหลวของ NAS ในการส่งแพ็กเก็ต accounting-stop โปรดทราบว่าแท็บนี้จะปรากฏเฉพาะเมื่อมีผู้ใช้ออนไลน์</p>
<h2 class="fs-6">ความพยายามเชื่อมต่อล่าสุด</h2>
<p>ให้รายการ Access-Accept และ Access-Reject (การเข้าสู่ระบบที่สำเร็จและล้มเหลว) ทั้งหมดสำหรับผู้ใช้ สิ่งเหล่านี้ถูกดึงมาจากตาราง postauth ของฐานข้อมูล ซึ่งต้องถูกกำหนดในไฟล์กำหนดค่าของ FreeRADIUS เพื่อเปิดใช้งานการบันทึก</p>
<h2 class="fs-6">ผู้ใช้อันดับต้น</h2>
<p>ให้รายการผู้ใช้ N อันดับต้นสำหรับการใช้แบนด์วิดธ์และเวลาเซสชันที่ใช้</p>
<h1 class="fs-5">รายงานหมวดหมู่ย่อย</h1>
<h2 class="fs-6">บันทึก</h2>
<p>ให้การเข้าถึงไฟล์บันทึก daloRADIUS, ไฟล์บันทึก FreeRADIUS, ไฟล์บันทึกระบบ และไฟล์บันทึกการบูต</p>
<h2 class="fs-6">สถานะ</h2>
<p>ให้ข้อมูลเกี่ยวกับสถานะเซิร์ฟเวอร์และสถานะคอมโพเนนต์ RADIUS</p>
EOF;
$l['helpPage']['repstatradius'] = "ให้ข้อมูลทั่วไปเกี่ยวกับเดมอน FreeRADIUS และเซิร์ฟเวอร์ฐานข้อมูล MySQL/MariaDB";
$l['helpPage']['repstatserver'] = "ให้ข้อมูลทั่วไปเกี่ยวกับเซิร์ฟเวอร์เอง: การใช้ CPU, กระบวนการ, Uptime, การใช้หน่วยความจำ ฯลฯ";
$l['helpPage']['repstatus'] = <<<EOF
<h1 class="fs-5">สถานะ</h1>
<h2 class="fs-6">สถานะเซิร์ฟเวอร์</h2>
<p>แสดงข้อมูลทั่วไปเกี่ยวกับเซิร์ฟเวอร์ รวมถึงการใช้ CPU จำนวนกระบวนการที่ทำงาน uptime การใช้หน่วยความจำ และอื่นๆ</p>
<h2 class="fs-6">สถานะ RADIUS</h2>
<p>แสดงข้อมูลทั่วไปเกี่ยวกับเดมอน FreeRADIUS และเซิร์ฟเวอร์ฐานข้อมูล MySQL</p>
EOF;
$l['helpPage']['reptopusers'] = "บันทึกสำหรับผู้ใช้อันดับต้น ผู้ที่แสดงรายการด้านล่างได้รับการใช้สูงสุดของเวลาเซสชันหรือการใช้แบนด์วิดธ์ แสดงรายการผู้ใช้ของหมวดหมู่: ";
$l['helpPage']['repusername'] = "พบบันทึกสำหรับผู้ใช้:";
$l['helpPage']['reponline'] = "ตารางต่อไปนี้แสดงรายการผู้ใช้ที่เชื่อมต่อกับระบบอยู่ในขณะนี้ เป็นไปได้มากว่ามีการเชื่อมต่อที่ค้าง หมายความว่าผู้ใช้ถูกตัดการเชื่อมต่อแต่ NAS ไม่ได้ส่งหรือไม่สามารถส่งแพ็กเก็ต STOP accounting ไปยังเซิร์ฟเวอร์ RADIUS";

$l['helpPage']['mnglistall'] = "แสดงรายการผู้ใช้ในฐานข้อมูล";
$l['helpPage']['mngsearch'] = "กำลังค้นหาผู้ใช้: ";
$l['helpPage']['mngnew'] = "คุณสามารถกรอกรายละเอียดด้านล่างสำหรับการเพิ่มผู้ใช้ใหม่ในฐานข้อมูล<br/>";
$l['helpPage']['mngedit'] = "แก้ไขรายละเอียดผู้ใช้ด้านล่าง<br/>";
$l['helpPage']['mngdel'] = "หากต้องการลบรายการผู้ใช้จากฐานข้อมูล คุณต้องระบุชื่อผู้ใช้ของบัญชี<br/>";
$l['helpPage']['mngbatch'] = "คุณสามารถกรอกรายละเอียดด้านล่างสำหรับการเพิ่มผู้ใช้ใหม่ในฐานข้อมูล<br/>
โปรดทราบว่าการตั้งค่าเหล่านี้จะใช้กับผู้ใช้ทั้งหมดที่คุณกำลังสร้าง<br/>";
$l['helpPage']['mngnewquick'] = "ผู้ใช้/การ์ดต่อไปนี้เป็นประเภทเติมเงินล่วงหน้า<br/>
จำนวนเวลาที่ระบุใน Time Credit จะถูกใช้เป็น Session-Timeout และ Max-All-Session
แอตทริบิวต์ radius";

// accounting section
$l['helpPage']['acctusername'] = <<<EOF
<h2 class="fs-6">บัญชีผู้ใช้</h2>
<p>ให้ข้อมูลบัญชีโดยละเอียดสำหรับเซสชันทั้งหมดในฐานข้อมูลที่เกี่ยวข้องกับผู้ใช้เฉพาะ</p>
EOF;

$l['helpPage']['acctdate'] = <<<EOF
<h2 class="fs-6">บัญชีวันที่</h2>
<p>ให้ข้อมูลบัญชีโดยละเอียดสำหรับเซสชันทั้งหมดระหว่างสองวันที่ที่ระบุสำหรับผู้ใช้เฉพาะ</p>
EOF;

$l['helpPage']['acctipaddress'] = <<<EOF
<h2 class="fs-6">บัญชีไอพี</h2>
<p>ให้ข้อมูลบัญชีโดยละเอียดสำหรับเซสชันทั้งหมดที่มาจากที่อยู่ไอพีเฉพาะ</p>
EOF;

$l['helpPage']['acctnasipaddress'] = <<<EOF
<h2 class="fs-6">บัญชี NAS</h2>
<p>ให้ข้อมูลบัญชีโดยละเอียดสำหรับเซสชันทั้งหมดที่จัดการโดยที่อยู่ไอพี NAS เฉพาะ</p>
EOF;

$l['helpPage']['acctactive'] = <<<EOF
<h2 class="fs-6">บันทึกบัญชีที่ใช้งานอยู่</h2>
<p>ให้ข้อมูลที่จะเป็นประโยชน์สำหรับการติดตามผู้ใช้ที่ใช้งานอยู่หรือหมดอายุในฐานข้อมูล เช่น ผู้ใช้ที่มีแอตทริบิวต์หมดอายุหรือแอตทริบิวต์ max-all-session</p>
EOF;

$l['helpPage']['acctall'] = <<<EOF
<h2 class="fs-6">บันทึกบัญชีทั้งหมด</h2>
<p>ให้ข้อมูลบัญชีโดยละเอียดสำหรับเซสชันทั้งหมดในฐานข้อมูล</p>
EOF;

$l['helpPage']['acctcustom_short'] = <<<EOF
<h1 class="fs-5">คิวรีกำหนดเอง</h1>
<p>ให้คิวรีกำหนดเองที่ยืดหยุ่นที่สุดในการรันบนฐานข้อมูล คุณสามารถปรับการตั้งค่าคิวรีในแถบด้านข้างซ้ายเพื่อประโยชน์ของคุณ</p>
EOF;

$l['helpPage']['acctcustom'] = <<<EOF
<h2 class="fs-6">คิวรีกำหนดเอง</h2>
<p>ฟีเจอร์นี้ช่วยให้สามารถสอบถามฐานข้อมูลได้อย่างยืดหยุ่นสูง ช่วยให้ผู้ดำเนินการสามารถปรับแต่งการเรียกข้อมูลให้ตรงกับความต้องการได้อย่างแม่นยำ คุณสามารถปรับการตั้งค่าคิวรีในแถบด้านข้างซ้ายเพื่อเพิ่มประสิทธิภาพการดึงข้อมูล</p>
<h2 class="fs-6">วันที่เริ่มต้นและสิ้นสุด</h2>
<p>ระบุวันที่เริ่มต้นและสิ้นสุดเพื่อเรียกข้อมูลภายในกรอบเวลาที่กำหนด</p>
<h2 class="fs-6">ที่ไหน</h2>
<p>กำหนดฟิลด์ฐานข้อมูลสำหรับวัตถุประสงค์การจับคู่ ทำหน้าที่เหมือนคีย์ เลือกระหว่างการจับคู่แบบแน่นอน ("equals") หรือการจับคู่บางส่วน ("contains") โดยใช้ตัวดำเนินการที่เกี่ยวข้อง หลีกเลี่ยงการใช้ไวด์การ์ดเช่น "*" เนื่องจากค่าอินพุตจะถูกจัดรูปแบบสำหรับการค้นหาโดยอัตโนมัติ (เช่น *value* หรือ %value%)</p>
<h2 class="fs-6">ฟิลด์บัญชีคิวรี</h2>
<p>เลือกฟิลด์ที่คุณต้องการรวมในรายการผลลัพธ์</p>
<h2 class="fs-6">เรียงตามและประเภทการเรียง</h2>
<p>ระบุฟิลด์ที่คุณต้องการเรียงลำดับผลลัพธ์และเลือกระหว่างลำดับจากน้อยไปมากหรือมากไปน้อย</p>
EOF;

$l['helpPage']['acctcustomquery'] = $l['helpPage']['acctcustom'];

$l['helpPage']['acctplans'] = "";
$l['helpPage']['acctmain'] = '<h1 class="fs-5">บัญชีทั่วไป</h1>'
                           . $l['helpPage']['acctusername'] . $l['helpPage']['acctdate']
                           . $l['helpPage']['acctipaddress'] . $l['helpPage']['acctnasipaddress']
                           . $l['helpPage']['acctall'] . $l['helpPage']['acctactive']
                           . $l['helpPage']['acctcustom_short'] . <<<EOF
<h1 class="fs-5">Hotspots</h1>
<p>ให้ข้อมูลเกี่ยวกับ Hotspotsที่จัดการต่างๆ การเปรียบเทียบ และข้อมูลที่เป็นประโยชน์อื่นๆ</p>
EOF;

// accounting hotspot section
$l['helpPage']['accthotspotaccounting'] = "
    ให้ข้อมูลบัญชีเต็มรูปแบบสำหรับเซสชันทั้งหมดที่มาจาก Hotspotsเฉพาะนี้
    รายการนี้คำนวณโดยแสดงรายการเฉพาะบันทึกเหล่านั้นในตาราง radacct ที่มีฟิลด์ CalledStationId
    ซึ่งตรงกับรายการที่อยู่แมคของ Hotspots ในฐานข้อมูลการจัดการ Hotspots 
<br/>
";
$l['helpPage']['accthotspotcompare'] = <<<EOF
<h1 class="fs-5">การเปรียบเทียบ Hotspots</h1>
<h2 class="fs-6">ข้อมูลพื้นฐาน</h2>
<p>ส่วนนี้ให้ข้อมูลบัญชีพื้นฐานสำหรับการเปรียบเทียบ Hotspotsที่ใช้งานอยู่ทั้งหมดที่พบในฐานข้อมูล ข้อมูลบัญชีต่อไปนี้รวมอยู่ด้วย: 
<ul>
<li>ชื่อ Hotspots: ชื่อของ Hotspots</li>
<li>ผู้ใช้ที่ไม่ซ้ำ: จำนวนผู้ใช้ที่เข้าสู่ระบบผ่าน Hotspots นี้เท่านั้น</li>
<li>ฮิตทั้งหมด: จำนวนการเข้าสู่ระบบทั้งหมดที่ดำเนินการจาก Hotspots นี้ (ไม่ซ้ำและซ้ำ)</li>
<li>เวลาเฉลี่ย: เวลาเฉลี่ยที่ผู้ใช้ใช้ใน Hotspots นี้</li>
<li>เวลารวม: เวลาสะสมที่ผู้ใช้ทั้งหมดใช้ใน Hotspots นี้</li>
</ul>
</p>
<h2 class="fs-6">กราฟ</h2>
<p>
ส่วนนี้ให้การเปรียบเทียบแบบกราฟิกสำหรับ Hotspots ต่างๆ กราฟต่อไปนี้มีให้: 
<ul>
<li>การกระจายผู้ใช้ที่ไม่ซ้ำต่อ Hotspots</li>
<li>การกระจายฮิตต่อ Hotspots</li>
<li>การกระจายการใช้เวลาต่อ Hotspots</li>
</ul>
</p>
EOF;
$l['helpPage']['accthotspot'] = "
<h200><b>บัญชี Hotspots</b></h200> -
    ให้ข้อมูลบัญชีเต็มรูปแบบสำหรับเซสชันทั้งหมดที่มาจาก Hotspots เฉพาะนี้
<br/>
<h200><b>การเปรียบเทียบ Hotspots</b></h200> -
    ให้ข้อมูลบัญชีพื้นฐานสำหรับการเปรียบเทียบระหว่าง Hotspots ที่ใช้งานอยู่ทั้งหมดที่พบในฐานข้อมูล
    ให้กราฟพล็อตของการเปรียบเทียบที่แตกต่างกันที่ทำ
<br/>
";

$l['helpPage']['acctmaintenance'] = <<<EOF
<h2 class="fs-6">ทำความสะอาดเซสชันที่ค้าง</h2> 
<p>เซสชันที่ค้างมักจะมีอยู่เมื่อ NAS ไม่สามารถให้บันทึก STOP accounting สำหรับเซสชันผู้ใช้ สิ่งนี้ส่งผลให้มีเซสชันเปิดค้างในบันทึกบัญชี ซึ่งจำลองบันทึกผู้ใช้ที่เข้าสู่ระบบปลอม ส่งผลให้เกิดผลบวกลวง</p>
<h2 class="fs-6">ลบบันทึกบัญชี</h2>
<p>หน้านี้อนุญาตให้ลบบันทึกบัญชีจากฐานข้อมูล แนะนำให้อนุญาตเฉพาะผู้ดูแลระบบที่ได้รับการดูแลให้เข้าถึงหน้านี้ เนื่องจากอาจไม่ฉลาดที่จะดำเนินการนี้โดยไม่พิจารณาอย่างรอบคอบ</p>
EOF;
$l['helpPage']['acctmaintenancecleanup'] = <<<EOF
<h2 class="fs-6">ทำความสะอาดเซสชันที่ค้าง</h2>
<p>ฟีเจอร์นี้ใช้เพื่อทำความสะอาดเซสชันผู้ใช้ที่ค้างซึ่งยังคงใช้งานอยู่ใน FreeRADIUS (และดังนั้นใน daloRADIUS) แม้ว่าผู้ใช้จะไม่ได้เชื่อมต่อกับ NAS อีกต่อไป เซสชันที่ค้างสามารถเกิดขึ้นได้เมื่อ NAS ล้มเหลวในการให้บันทึก STOP accounting ส่งผลให้เกิดบันทึกผู้ใช้ที่เข้าสู่ระบบที่เป็นบวกลวง</p>
<p>มีสองวิธีในการทำความสะอาดเซสชันที่ค้าง:
<ul>
<li>ทำความสะอาดตามชื่อผู้ใช้: ตัวเลือกนี้จะ<b>ปิด</b>เซสชันเปิดทั้งหมดสำหรับชื่อผู้ใช้เฉพาะในฐานข้อมูล FreeRADIUS ใช้ตัวเลือกนี้ด้วยความระมัดระวัง</li>
<li>ทำความสะอาดตามวันที่: ตัวเลือกนี้จะ<b>ลบ</b>เซสชันเปิดทั้งหมดที่เก่ากว่าวันที่ที่ระบุในฐานข้อมูล FreeRADIUS ใช้ตัวเลือกนี้ด้วยความระมัดระวังเช่นกัน</li>
</ul>
</p>
EOF;
$l['helpPage']['acctmaintenancedelete'] = "";

$l['helpPage']['giseditmap'] = <<<EOF
<h1 class="fs-5">โหมดแก้ไขแผนที่</h1<p>โหมดนี้ช่วยให้คุณเพิ่มหรือลบ Hotspots โดยการคลิกบนแผนที่หรือไอคอน Hotspots ตามลำดับ</p>
<h2 class="fs-6">การเพิ่ม Hotspots</h2>
<p>หากต้องการเพิ่ม Hotspots ให้คลิกที่ตำแหน่งที่ชัดเจนบนแผนที่ คุณจะถูกขอให้ระบุชื่อ Hotspots และที่อยู่แมค ซึ่งเป็นรายละเอียดสำคัญที่ใช้ระบุ Hotspots ในตารางบัญชี ตรวจสอบให้แน่ใจว่าได้ระบุที่อยู่แมคที่ถูกต้อง!</p>
<h2 class="fs-6">การลบ Hotspots</h2>
<p>หากต้องการลบ Hotspots เพียงคลิกที่ไอคอนของ Hotspots และยืนยันการลบจากฐานข้อมูล</p>
EOF;
$l['helpPage']['gisviewmap'] = <<<EOF
<h1 class="fs-5">โหมดดูแผนที่</h1>
<p>ในโหมดนี้ คุณสามารถเรียกดู Hotspots ที่วางออกเป็นไอคอนทั่วแผนที่</p>
<p>โดยการคลิกที่ Hotspots  คุณสามารถเข้าถึงข้อมูลโดยละเอียดเพิ่มเติมเกี่ยวกับมัน รวมถึงข้อมูลติดต่อและรายละเอียดที่เกี่ยวข้องอื่นๆ</p>
EOF;
$l['helpPage']['gismain'] = <<<EOF
<p>ฟีเจอร์ <strong>GIS</strong> ให้การแมปภาพของตำแหน่ง Hotspots ทั่วโลก</p>
<p>เมื่อเพิ่ม Hotspots ใหม่ คุณสามารถระบุตำแหน่งทางภูมิศาสตร์โดยให้พิกัดละติจูดและลองจิจูด ซึ่งใช้เพื่อระบุตำแหน่งที่แน่นอนบนแผนที่</p>
<p>ฟีเจอร์ GIS เสนอสองโหมดการทำงานที่แตกต่างกัน:</p>
<ul>
    <li>ในโหมด <strong>View MAP</strong> คุณสามารถสำรวจแผนที่โลกและดูตำแหน่งปัจจุบันของ Hotspots ทั้งหมดในฐานข้อมูลโดยเพียงคลิกที่ไอคอนของพวกเขา</li>
    <li>ในโหมด <strong>Edit MAP</strong> คุณสามารถเพิ่ม Hotspots ใหม่ลงในแผนที่ได้ด้วยภาพโดยคลิกซ้ายที่ตำแหน่งที่ชัดเจน หรือลบ Hotspots ที่มีอยู่โดยคลิกซ้ายที่ไอคอนของพวกเขา</li>
</ul>
EOF;
/* ********************************************************************************** */
$l['messages']['noCheckAttributesForUser'] = "ผู้ใช้นี้ไม่มีแอตทริบิวต์ check ที่เกี่ยวข้อง";
$l['messages']['noReplyAttributesForUser'] = "ผู้ใช้นี้ไม่มีแอตทริบิวต์ reply ที่เกี่ยวข้อง";
$l['messages']['noCheckAttributesForGroup'] = "กลุ่มนี้ไม่มีแอตทริบิวต์ check ที่เกี่ยวข้อง";
$l['messages']['noReplyAttributesForGroup'] = "กลุ่มนี้ไม่มีแอตทริบิวต์ reply ที่เกี่ยวข้อง";
$l['messages']['nogroupdefinedforuser'] = "ผู้ใช้นี้ไม่มีกลุ่มที่เกี่ยวข้อง";
$l['messages']['wouldyouliketocreategroup'] = "คุณต้องการสร้างหนึ่งหรือไม่?";
$l['messages']['missingratetype'] = "ข้อผิดพลาด: ขาดประเภทอัตราที่จะลบ";
$l['messages']['missingtype'] = "ข้อผิดพลาด: ขาดประเภท";
$l['messages']['missingcardbank'] = "ข้อผิดพลาด: ขาด cardbank";
$l['messages']['missingrate'] = "ข้อผิดพลาด: ขาดอัตรา";
$l['messages']['success'] = "สำเร็จ";
$l['messages']['gisedit1'] = "ยินดีต้อนรับ คุณอยู่ในโหมดแก้ไขในขณะนี้";
$l['messages']['gisedit2'] = "ลบเครื่องหมายปัจจุบันจากแผนที่และฐานข้อมูล?";
$l['messages']['gisedit3'] = "โปรดป้อนชื่อของ Hotspots";
$l['messages']['gisedit4'] = "เพิ่มเครื่องหมายปัจจุบันลงในฐานข้อมูล?";
$l['messages']['gisedit5'] = "โปรดป้อนชื่อของ Hotspots";
$l['messages']['gisedit6'] = "โปรดป้อนที่อยู่แมคของ Hotspots";
$l['messages']['gismain1'] = "อัปเดตรหัสการลงทะเบียน GoogleMaps API สำเร็จ";
$l['messages']['gismain2'] = "ข้อผิดพลาด: ไม่สามารถเปิดไฟล์เพื่อเขียน:";
$l['messages']['gismain3'] = "ตรวจสอบสิทธิ์ไฟล์ ไฟล์ควรสามารถเขียนได้โดยผู้ใช้/กลุ่มของเว็บเซิร์ฟเวอร์";
$l['messages']['gisviewwelcome'] = "ยินดีต้อนรับสู่ Enginx Visual Maps";
$l['messages']['loginerror'] = <<<EOF
<h1 class="fs-5">ไม่สามารถเข้าสู่ระบบได้</h1>
<p>สิ่งนี้มักเกิดขึ้นด้วยเหตุผลเหล่านี้อย่างใดอย่างหนึ่ง:
    <ul>
        <li>ชื่อผู้ใช้และ/หรือรหัสผ่านผิด</li>
        <li>ผู้ดูแลระบบเข้าสู่ระบบอยู่แล้ว<br>(อนุญาตเพียงหนึ่งอินสแตนซ์)</li>
        <li>ดูเหมือนว่าจะมีผู้ใช้ 'administrator' มากกว่าหนึ่งคนในฐานข้อมูล</li>
    </ul>
</p>
EOF;
$l['buttons']['savesettings'] = "บันทึกการตั้งค่า";
$l['buttons']['apply'] = "บันทึกการเปลี่ยนแปลง";
$l['menu']['Home'] = "หน้าหลัก";
$l['menu']['Managment'] = "การจัดการผู้ใช้ระบบ";
$l['menu']['Reports'] = "รายงาน/สถิติ";
$l['menu']['Accounting'] = "บันทึกการใช้งาน";
$l['menu']['Billing'] = "การเรียกเก็บเงิน";
$l['menu']['Gis'] = "แผนที่ (GIS)";
$l['menu']['Graphs'] = "กราฟสถิติ";
$l['menu']['Config'] = "ตั้งค่าระบบ";
$l['menu']['Help'] = "ช่วยเหลือ";
$l['submenu']['General'] = "ทั่วไป";
$l['submenu']['Reporting'] = "การรายงาน";
$l['submenu']['Maintenance'] = "บำรุงรักษาระบบ";
$l['submenu']['Operators'] = "จัดการผู้ดูแลระบบ";
$l['submenu']['Backup'] = "สำรองข้อมูล";
$l['submenu']['Logs'] = "ประวัติการทำงาน (Logs)";
$l['submenu']['Status'] = "สถานะ";
$l['submenu']['Batch Users'] = "ผู้ใช้ระบบแบบชุด";
$l['submenu']['Dashboard'] = "แดชบอร์ด";
$l['submenu']['Users'] = "ผู้ใช้ระบบทั้งหมด";
$l['submenu']['Hotspots'] = "Hot Spots";
$l['submenu']['Nas'] = "NAS Authentication";
$l['submenu']['User-Groups'] = "กลุ่มผู้ใช้ระบบ";
$l['submenu']['Profiles'] = "โปรไฟล์";
$l['submenu']['HuntGroups'] = "HuntGroups";
$l['submenu']['Attributes'] = "แอตทริบิวต์";
$l['submenu']['Realm/Proxy'] = "Realm/Proxy";
$l['submenu']['IP-Pool'] = "IP-Pool";
$l['submenu']['POS'] = "POS";
$l['submenu']['Plans'] = "แผน";
$l['submenu']['Rates'] = "อัตรา";
$l['submenu']['Merchant-Transactions'] = "ธุรกรรมผู้ค้า";
$l['submenu']['Billing-History'] = "ประวัติการเรียกเก็บเงิน";
$l['submenu']['Invoices'] = "ใบแจ้งหนี้";
$l['submenu']['Payments'] = "การชำระเงิน";
$l['submenu']['Custom'] = "กำหนดเอง";
$l['submenu']['Hotspot'] = "HotSpots";
$l['submenu']['Mail'] = "อีเมล";