###php享元（轻量级）模式
+ Explanation 
  + 为了节约内存的使用，享元模式会尽量使类似的对象共享内存。
  + 在大量类似对象被使用的情况中这是十分必要的。
  + 常用做法是在外部数据结构中保存类似对象的状态，并在需要时将他们传递给享元对象。

   * 就是缓存了创建型模式创建的对象，不知道为什么会归在结构型模式中，个人觉得创建型模式更合适
   * 其次，享元强调的缓存对象，外观模式强调的对外保持简单易用，是不是就大体构成了目前牛逼哄哄且满大的街【依赖注入容器】
+ usage   
+ example