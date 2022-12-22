# Phân tích

Trang web chứa lỗ hổng SSTI, tại URL:

![image](https://user-images.githubusercontent.com/114990730/209155533-a6bf4cc7-e8be-47dc-b8d3-4bd4db8ccf03.png)

Trang web sử dụng template Jinja2

![image](https://user-images.githubusercontent.com/114990730/209155934-8b1c358c-e569-4808-9dcd-28f8965ac0c6.png)

List subclasses:

![image](https://user-images.githubusercontent.com/114990730/209157642-cee3077d-ba0f-496d-a227-00cdddf6e480.png)

Dùng Intruder tìm một số class dùng được (Danh sách một số class hữu dụng trong SSTI: https://blog.p6.is/Python-SSTI-exploitable-classes/)

![image](https://user-images.githubusercontent.com/114990730/209162212-d5e28bf4-6972-400a-a5dd-4cfbb2707cd4.png)

Dùng class `os._wrap_close` có hàm `popen` dùng được:

![image](https://user-images.githubusercontent.com/114990730/209163033-9373dca1-1a27-4f8f-88ee-7d60ee33508a.png)

![image](https://user-images.githubusercontent.com/114990730/209163248-77dffce6-aee1-409e-b502-783ba808d0cd.png)
