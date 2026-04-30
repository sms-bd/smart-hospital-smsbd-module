# Smart Hospital : Hospital Management System (SMS Module for Bangladesh)

SMS.BD API integration module for **Smart Hospital Management System (CodeIgniter)**.

🔗 Official Script:  
👉 https://codecanyon.net/item/smart-hospital-hospital-management-system/23205038

This module enables sending SMS notifications in Bangladesh using **SMS.BD Gateway**.

---

## 🚀 Features

- ✅ SMS.BD API Integration
- ✅ Custom SMS Gateway Support
- ✅ No extra plugin required
- ✅ Lightweight & Easy Setup
- ✅ Works with Smart Hospital Script
- ✅ Supports Sender ID (optional)
- ✅ Compatible with PHP 7 / PHP 8

---

## 🇧🇩 বাংলাদেশি ব্যবহারকারীদের জন্য

এই মডিউলটি **Smart Hospital Software** এর সাথে **SMS.BD API** ব্যবহার করে SMS পাঠানোর জন্য তৈরি করা হয়েছে।

👉 Supported Use Cases:

- Patient Appointment SMS  
- Billing Notification  
- Doctor Schedule Alert  
- Lab Report Ready SMS  
- OTP / Verification  

---

## 🔧 Installation Guide

### Step 1: Register SMS.BD Account

👉 Signup: https://sms.bd/signup/  

After registration:

👉 Login: https://portal.sms.net.bd  
👉 Go to **API Section**  
👉 Copy your **API KEY**

---

### Step 2: Install Module (Very Important)

📌 Smart Hospital Script already includes this file: application/libraries/Customsms.php


👉 You **DO NOT need to create new file**

✅ Just:

- Open the file  
- Replace existing code with this module code  

---

## ⚙️ Enable Custom SMS Gateway (IMPORTANT)

After replacing the code, enable it from admin panel.

### Steps:

Go to:Dashboard → Setup → Settings → SMS Settings


Then configure:

- **Select:** Custom SMS Gateway  
- **Gateway Name:** `Alpha SMS`  
- **Status:** `Enabled`  

Click **Save**

---

## ✅ Usage Example (Developer)

```php
$this->load->library('customsms');

$this->customsms->sendSMS("8801XXXXXXXXX", "Test SMS from Smart Hospital");

