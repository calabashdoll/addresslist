
# 通讯录系统

- 案例分析

- 需求分析
- 选择设计模式与计划
- 应用程序编程
- 使用更多设计模式进行改进

Name:联系方式管理器
subject:Web方式管理通讯录

- 作用域:web系统,现有数据导入
  需求:增删改查用户信息,导入老数据!
- 需求分析:
作用域内:
 *创建一个在线联系方式系统
 *分离使用不同证书的用户账户

 *为 Internet Explorer 提供一个借口
 *为移动浏览器提供一个接口
 *从现在有电子邮件系统导入联系方式的方法
 *允许通过连接直接使用联系方式信息
作用域外
 *保持新,旧联系方式的同步与最新
 *使用与网络应用相同的证书

- 详细需求:
提供web服务
1.名,中文名字
2.个人电子邮件地址
3.个人住址
4.个人座机/移动电话
5.公司名称
6.工作职位
7.公司电子邮件地址
8.公司地址
9.公司电话/分机/移动电话
10.公司社交网络 URL
11.即时通信软件名
12.web 站点
13.能将联系方式导入
问答式
大小/用户规模
问:用户规模,增长情况
答:50,每季度增加2个
联系方式信息的类型
应用程序访问
联系方式同步

- 沟通后的文档
*Web站点可用性
*联系方式信息
电子邮件地址
具体住址
可以具有分机电话
移动电话
移动名称
在机构中的职位
社交网络URL
即使通信软件名
Web站点
*初始联系方式导入
一次性导入
还存在的问题
 outlook,浏览器兼容问题,一次性导入问题.

选择设计模式和计划

1.主核心
2.用户交互管理
      身份验证/授权
      创建,编辑,删除用户
      提供对所有用户的管理访问
3.联系方式管理

具体设计见附件

预留改进空间

错误检查设计-策略模式
save() 前使用Visitor->isvalid()

联系方式管理
去除contacts/manage里的逻辑
创建一个Facade的实例构建在edit()里

视图类型
setviewtype() 的方法可以推断视图类型--可以用委托设计模式
也可以做成通用方法判断HTTP User Agent-使用解析器模式

删除对象

中介者模式可以删除某个用户的同时,向下转移!

- 适配器是继承应用,
     - 委托是组合应用 
     - 代理也是继承->覆盖方法
     - 解析器模式是也是组合-替换
     - 策略组合也是组合- this
     - 中介者->两个不同对象联动数据
