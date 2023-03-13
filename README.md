## About The Project
[MongoDB][mongodb] database with Symfony applications.    

In this repository, every branch holds a separate example project except the main branch.  
Please check the [projects](#projects) section for more details.


## Overview
| Branch                     | MongoDB Version | Symfony Version | PHP Version |
|----------------------------|-----------------|-----------------|-------------|
| [dmdb45][dmdb45]           | `^6.0`          | `^5.4`          | `^8.1`      |
| [mert-sevinc][mert-sevinc] | `^4.4`          | `^4.4`          | `^7.4`      |


## Projects
<details><summary>A simple CRUD application using DoctrineMongoDBBundle: ^4.5</summary>  
<p>  

<img
src="https://user-images.githubusercontent.com/5810350/224570134-5af06c26-8d8f-4899-8e7f-fa40cff94326.png"
alt="Product Index Page"
width="80%"
/>

**Code:** https://github.com/habibun/symfony-mongodb/tree/dmdb45  
**Resources:**
- [DoctrineMongoDBBundle](https://www.doctrine-project.org/projects/doctrine-mongodb-bundle/en/latest/index.html) 
<br/>

#### Installation
```bash
git clone git@github.com:habibun/symfony-mongodb.git
cd symfony-mongodb
git checkout dmdb45
symfony composer install
```

</p>
</details>


<details><summary>Symfony 4 and Doctrine Mongo DB</summary>  
<p>  

<img
src="https://user-images.githubusercontent.com/5810350/224615292-f566b0fd-4293-4d31-b4e6-51e00d7e4d6f.png"
alt="User Index Page"
width="80%"
/>

**Code:** https://github.com/habibun/symfony-mongodb/tree/mert-sevinc  
**Resources:**
- [Symfony 4 and Doctrine Mongo DB](https://medium.com/@ahmetmertsevinc/symfony-4-and-doctrine-mongo-db-c9ac0f02f742)  
<br/>

#### Installation
```bash
git clone git@github.com:habibun/symfony-mongodb.git
cd symfony-mongodb
git checkout mert-sevinc
symfony composer install
```

</p>
</details>


## Learn More
- [MongoDB Docs](https://www.mongodb.com/docs/)  
- [MongoDB Community Edition on Ubuntu](https://www.mongodb.com/docs/v4.4/tutorial/install-mongodb-on-ubuntu/)
- [MongoDB Shell](https://www.mongodb.com/docs/mongodb-shell/)  
- [Symfony2 & MongoDB ODM: Adding the missing ParamConverter](https://matthiasnoback.nl/2012/10/symfony2-mongodb-odm-adding-the-missing-paramconverter/)


## License
Distributed under the MIT License. See **[LICENSE][license]** for more information.


[//]: # (Links)
[mongodb]: https://www.mongodb.com
[license]: https://github.com/habibun/symfony-mongodb/blob/main/LICENSE

[mert-sevinc]: https://github.com/habibun/symfony-mongodb/tree/mert-sevinc
[dmdb45]: https://github.com/habibun/symfony-mongodb/tree/dmdb45
[license]: https://github.com/habibun/symfony-mongodb/blob/main/LICENSE
