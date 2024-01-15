## Dmytro Kopylets
***

**my contacts:**
* dm.kopylets@gmail.com
* https://t.me/Dmytro_Kopylets

***

**My test work for getting a job as a Junior PHP Developer**

**Task 2 from 2**

***

Full text of the task here [task](task%2FTaskJuniorPhp.pdf)

***

git clone https://github.com/dmkopylets/abcGroupTest.git

**to build docker containers use:**

copy file .env.example to .env

make dc-build

**to start the containers use:**

make dc-up

**then install packages for vendors:**

make composer-i

**then initialize the database:**

make db-init

***

in the future could only use 
**make dc-up**

**it will be possible to test the application in a browser at localhost**


**  http://localhost/api/v1/clicks ... - API responses
    ![backend.png](task%2Fbackend.png)   

**  http://localhost/api/documentation - Swagger API documentation
    ![documentation.png](task%2Fdocumentation.png)    

and to stop docker containers use 
**make dc-down**


