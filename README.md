# **학교 급식 API with PHP (SC_Meal)**

Create by lill74 in September 8th 2018. License under GPL v3.

## API Document

#### *API Parameters*

| 종류(GET/POST) |   이름   |                       설명                        |
| :------------: | :------: | :-----------------------------------------------: |
|      GET       | regCode  | 지역 코드(필수), 교육청 지역 코드를 넣어야합니다. |
|      GET       |  scCode  |  학교 코드(필수), 학교 구분 코드를 넣어야합니다.  |
|      GET       |  scType  |  학교 종류(필수), 학교 구분 코드를 넣어야합니다.  |
|      GET       |   date   |       날짜(필수 아님), 날짜를 넣어야합니다.       |
|      GET       | mealType |  급식종류(필수 아님), 급식 종류를 넣어야합니다.   |



*DataType*

**regCode (필수)**

| 구분      | 설명                  |
| --------- | --------------------- |
| seoul     | 서울특별시 교육청     |
| incheon   | 인천광역시 교육청     |
| gyeonggi  | 경기도 교육청         |
| busan     | 부산광역시 교육청     |
| gwanju    | 광주광역시 교육청     |
| daejeon   | 대전광역시 교육청     |
| daegue    | 대구광역시 교육청     |
| sejong    | 세종                  |
| ulsan     | 울산광역시 교육청     |
| kangwon   | 강원도 교육청         |
| chungbuk  | 충청북도 교육청       |
| chungnam  | 충청남도 교육청       |
| gyeongbuk | 경상북도 교육청       |
| gyeongnam | 경상남도 교육청       |
| jeonbuk   | 전라북도 교육청       |
| jeonnam   | 전라남도 교육청       |
| jeju      | 제주특별자치도 교육청 |



**scCode (필수)**

학교 구분 코드로 https://www.meatwatch.go.kr/biz/bm/sel/schoolListPopup.do 에서 조회할수 있습니다.



**scType (필수)**

| 구분 |       설명       |
| :--: | :--------------: |
|  1   |      유치원      |
|  2   |     초등학교     |
|  3   |      중학교      |
|  4   | 고등학교고등학교 |



**date (필수 아님)**

해당 날짜로 조회합니다.

Data Format Example : 2018.09.09



**mealType (필수 아님)**

| 구분 | 설명 |
| :--: | :--: |
|  1   | 조식 |
|  2   | 중식 |
|  3   | 석식 |



#### 예제

**입력 값**

```
https://alus20.tk/api/sc_meal.php?regCode=seoul&scCode=B100000456&scType=4&date=2018.09.10&mealType=3
```

제가 재학중인 고등학교가 아닌 그저 참고용입니다.



**출력값**

```
{
    "지역 코드": "sen.go.kr",
    "학교 코드": "B100000456",
    "학교 종류": "고등학교",
    "급식 종류": "석식",
    "날짜": "2018.09.10",
    "메뉴": "새우튀김우동1.5.6.9.13.18. 참치주먹밥1.5.6.13. 시저샐러드(로메인)1.2.5.6.10.13. 수제돈육튀김1.5.6.10.13. 깍두기9. 강정소스4.5.6.12.13. 수제자몽에이드5.13."
}
```



#### Other Informations

저는 나이스 학생정보 시스템에서 크롤링하고 있으며 현재 나이스 시스템 부하와 서버 부하를 줄이기 위해 데이터베이스 캐쉬를 하고있습니다.



알레르기 정보

1.난류 2.우유 3.메밀 4.땅콩 5.대두 6.밀 7.고등어 8.게 9.새우 10.돼지고기 11.복숭아 12.토마토 13.아황산류 14.호두 15.닭고기16.쇠고기 17.오징어 18.조개류(굴,전복,홍합 포함)

Special thanks : alus20 (alus20x@gmail.com)
Server Uptime monitor : uptime.alus20.tk

#### Contact

a010393223@gmail.com
