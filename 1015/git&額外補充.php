<?php

/*git用法
($ git init)->初始化(將沒上傳給git的資料夾上傳)
($ git status)->查看檔案狀態
($ git add . 檔案名稱)->個別準備上傳
($ git add .)->全部準備上傳
($ git commit -m"名稱")->此名稱會是你這次紀錄儲存點的名稱
($ git log)->查詢變更的時間
($ git diff 檔案編碼A 檔案編碼B)->A跟B兩個檔案編碼的檔案做比較
($ git checkout 檔案編碼)->切換到到該編碼的檔案版本
($ git reflog)->查詢所有版本檔案編碼
($ git branch 檔案名稱)->建立檔案分支(名稱不建議用中文)
($ git branch)->查詢所有目前有的檔案分支(branch類似主線所延伸的所有分支都可以管理到)
($ git checkout 檔案名稱)->可以切換支線到檔案名稱的位置(跟編碼不一樣是切換支線編碼是單點)

1018新增
git remote add origin https://github.com/Astour44/php-test.git(origin可以自行替換名稱)
git push forst master ->將更改後的檔案上傳到github，記得先git add&commit
git pull forst master->將遠端(github)編輯的檔案變更到本地文件
(forst是你檔案名稱,master是你的分支名稱,兩者皆是會變動的)
在github的文件超連結上面按.(ㄡ>)可以進入雲端編輯模式，可以在雲端上面文件編輯
(git bash here)輸入->git clone 網址->這樣就可以直接下載網路的專案下來
中斷下載用ctrl+C
1018晚上新增
(git remote -v)->確認節點名稱跟節點是否存在(origin  https://github.com/Astour44/forst.git 這條就是origin是節點名稱)
今天遇到的狀況就是節點名稱一直不符合，因為clone下來的檔案本身就會是origin，而我卻一直輸入forest(以為是要輸入遠端github上面的儲存點名稱)
所以從頭來過的順序就是一開始新建一個資料夾用Vscode打開跟github並登入，輸入帳號跟使用者名稱
$ git config --global user.name "Astour44"
$ git config --global user.email astour44@gmail.com
<<<<<<< HEAD
之後輸入git remote add 節點名稱 https://github.com/Astour44/php-test.git
之後pull檔案下來並彈出認證視窗
git remote remove 節點名稱->刪除節點

=======
之後用git init初始化
然後輸入git remote add 節點名稱 https://github.com/Astour44/php-test.git
再用pull檔案下來並彈出認證視窗

git branch reset(reset是回到版本前)
$ git reset e12d8ef^(^是回到前一次)
git branch reset Head(Head是版本的頭)
>>>>>>> 9a2b3254c416df38cb30d28a422e9ab7a34bddc6










上課的額外補充:
密碼跟編碼差別在
密碼可還原並且有規則(因為知道規則所以可還原)
編碼不可還原且無規則(因為沒有規則所以他無法還原)
*/
?>