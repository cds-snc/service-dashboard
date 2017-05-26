---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://service-dashboard.dev/docs/collection.json)
<!-- END_INFO -->

#Departments
<!-- START_2a2bd5f635421bebeab28f82894cfdaa -->
## Get All Departments

> Example request:

```bash
curl -X GET "http://service-dashboard.dev/api/departments" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://service-dashboard.dev/api/departments",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "Agriculture and Agri-Food Canada",
        "programs": [
            {
                "id": 1,
                "name": "AgriRisk Initiatives",
                "program_id_number": "1.1.5",
                "department_id": 1
            },
            {
                "id": 2,
                "name": "Career Focus Program",
                "program_id_number": "2.2.2",
                "department_id": 1
            },
            {
                "id": 3,
                "name": "Farm Debt Mediation Service",
                "program_id_number": "2.2.1",
                "department_id": 1
            },
            {
                "id": 4,
                "name": "Churchill Port Utilization Program",
                "program_id_number": "2.2.6",
                "department_id": 1
            },
            {
                "id": 5,
                "name": "AgriMarketing - Assurance System",
                "program_id_number": "1.2.4",
                "department_id": 1
            },
            {
                "id": 6,
                "name": "AgriMarketing - Market Development Stream",
                "program_id_number": "1.2.3",
                "department_id": 1
            },
            {
                "id": 7,
                "name": "AgriCompetitiveness",
                "program_id_number": "2.2.2",
                "department_id": 1
            },
            {
                "id": 8,
                "name": "Career Focus Program (AYGJI is an initiaitve under te borader YES Career Focus program)",
                "program_id_number": "2.2.2",
                "department_id": 1
            },
            {
                "id": 9,
                "name": "AgriInvest",
                "program_id_number": "1.1.2",
                "department_id": 1
            },
            {
                "id": 10,
                "name": "AgriStability",
                "program_id_number": "1.1.1",
                "department_id": 1
            },
            {
                "id": 11,
                "name": "Canadian Agricultural Adaptation Program",
                "program_id_number": "2.2.7",
                "department_id": 1
            },
            {
                "id": 12,
                "name": "AgriInnovation",
                "program_id_number": "2.1.3",
                "department_id": 1
            },
            {
                "id": 13,
                "name": "AgriInnovation",
                "program_id_number": "2.1.4",
                "department_id": 1
            },
            {
                "id": 14,
                "name": "Agricultural Greenhouse Gas Program",
                "program_id_number": "2.1.7",
                "department_id": 1
            },
            {
                "id": 15,
                "name": "Market Infromation and Analysis",
                "program_id_number": "1.2.3",
                "department_id": 1
            },
            {
                "id": 16,
                "name": "International Trade Shows",
                "program_id_number": "1.2",
                "department_id": 1
            },
            {
                "id": 17,
                "name": "Global Market Information and Analysis",
                "program_id_number": "1.2",
                "department_id": 1
            },
            {
                "id": 18,
                "name": "Canada Brand",
                "program_id_number": "1.2",
                "department_id": 1
            },
            {
                "id": 19,
                "name": "Market Access",
                "program_id_number": "1.2",
                "department_id": 1
            },
            {
                "id": 20,
                "name": "Agriculture and Agri-Food Canada Food Research and Development Centre's Industrial Program",
                "program_id_number": "2.1.1",
                "department_id": 1
            },
            {
                "id": 21,
                "name": "Office of Intellectual Properities and Commercialization",
                "program_id_number": "2.1",
                "department_id": 1
            },
            {
                "id": 22,
                "name": "Drought Watch",
                "program_id_number": "2.1.1",
                "department_id": 1
            },
            {
                "id": 23,
                "name": "Canadian Soil Information System",
                "program_id_number": "2.1.1",
                "department_id": 1
            },
            {
                "id": 24,
                "name": "Geospatial\nProducts",
                "program_id_number": "2.1.1",
                "department_id": 1
            },
            {
                "id": 25,
                "name": "ATIP",
                "program_id_number": "3.1.2",
                "department_id": 1
            }
        ]
    },
    {
        "id": 2,
        "name": "Canada School of Public Service",
        "programs": [
            {
                "id": 26,
                "name": "Learning Services",
                "program_id_number": "1.1",
                "department_id": 2
            }
        ]
    },
    {
        "id": 3,
        "name": "",
        "programs": [
            {
                "id": 27,
                "name": "",
                "program_id_number": "",
                "department_id": 3
            }
        ]
    },
    {
        "id": 4,
        "name": "Employment and Social Development Canada",
        "programs": [
            {
                "id": 28,
                "name": "OAS",
                "program_id_number": "4.1.1",
                "department_id": 4
            },
            {
                "id": 29,
                "name": "CPP",
                "program_id_number": "4.1.2 &\n4.1.3",
                "department_id": 4
            },
            {
                "id": 30,
                "name": "Canada Disability Savings  Grant and Canada Disability Savings Bond",
                "program_id_number": "3.1.3.1 & 3.1.3.2",
                "department_id": 4
            },
            {
                "id": 31,
                "name": "Gs&Cs",
                "program_id_number": "1.2.2\n2.1.5-2.1.11\n2.1.13\n2.1.14\n2.1.17\n4.2.1-4.2.3\n4.2.5\n4.2.6",
                "department_id": 4
            },
            {
                "id": 32,
                "name": "Work-Sharing",
                "program_id_number": "2.1.1",
                "department_id": 4
            },
            {
                "id": 33,
                "name": "Social Insurance Number",
                "program_id_number": "4.1.3",
                "department_id": 4
            },
            {
                "id": 34,
                "name": "Employment Insurance and Income Benefits",
                "program_id_number": "2.1.1",
                "department_id": 4
            },
            {
                "id": 35,
                "name": "Labour Market Development Agreements",
                "program_id_number": "2.1.2",
                "department_id": 4
            },
            {
                "id": 36,
                "name": "Apprenticeship Grants",
                "program_id_number": "2.1.16",
                "department_id": 4
            },
            {
                "id": 37,
                "name": "Temporary Foreign Worker Program",
                "program_id_number": "2.1.18",
                "department_id": 4
            },
            {
                "id": 38,
                "name": "Federal Income Support for Parents of Murdered or Missing Children (PMMC)",
                "program_id_number": "4.2.6",
                "department_id": 4
            },
            {
                "id": 39,
                "name": "Job Bank",
                "program_id_number": "2.1.12",
                "department_id": 4
            },
            {
                "id": 40,
                "name": "Canada Student Loans Program",
                "program_id_number": "2.2.1",
                "department_id": 4
            },
            {
                "id": 41,
                "name": "Canada Education Savings Program",
                "program_id_number": "2.2.2",
                "department_id": 4
            },
            {
                "id": 42,
                "name": "Saskatchewan Advantage Grant for Education Savings",
                "program_id_number": "N\/A",
                "department_id": 4
            },
            {
                "id": 43,
                "name": "Digital Service",
                "program_id_number": "1.1.1",
                "department_id": 4
            },
            {
                "id": 44,
                "name": "Digital Service",
                "program_id_number": "1.1",
                "department_id": 4
            },
            {
                "id": 45,
                "name": "Passport Services",
                "program_id_number": "1.2.1",
                "department_id": 4
            },
            {
                "id": 46,
                "name": "EI Premium Reduction Program",
                "program_id_number": "2.1.1",
                "department_id": 4
            },
            {
                "id": 47,
                "name": "EI Supplemental Unemployment Benefits Program",
                "program_id_number": "2.1.1",
                "department_id": 4
            },
            {
                "id": 48,
                "name": "Canadian Occupational Projection System (COPS)",
                "program_id_number": "1.1.3",
                "department_id": 4
            },
            {
                "id": 49,
                "name": "Labour                                                 (Labour Relations)",
                "program_id_number": "2.1.1",
                "department_id": 4
            },
            {
                "id": 50,
                "name": "Labour",
                "program_id_number": "2.1.2.1",
                "department_id": 4
            },
            {
                "id": 51,
                "name": "Labour                                                 (Labour Relations)",
                "program_id_number": "2.1.1.2",
                "department_id": 4
            },
            {
                "id": 52,
                "name": "Labour Funding Program",
                "program_id_number": "2.1.3.2 & \n3.1.4",
                "department_id": 4
            },
            {
                "id": 53,
                "name": "Labour                                                 (Workplace Health and Safety)",
                "program_id_number": "2.1.2.2",
                "department_id": 4
            },
            {
                "id": 54,
                "name": "Labour\n(Workplace Equity)",
                "program_id_number": "2.1.3.2",
                "department_id": 4
            },
            {
                "id": 55,
                "name": "Labour \n(Occupational Health and Safety)",
                "program_id_number": "3.1.2.1",
                "department_id": 4
            },
            {
                "id": 56,
                "name": "Labour \n(Labour Standards)",
                "program_id_number": "3.1.3.1",
                "department_id": 4
            },
            {
                "id": 57,
                "name": "Labour \n(Labour Standards)",
                "program_id_number": "3.1.3.3",
                "department_id": 4
            },
            {
                "id": 58,
                "name": "British Columbia Training and Education Savings Grant",
                "program_id_number": "N\/A",
                "department_id": 4
            },
            {
                "id": 60,
                "name": "Social Security Tribunal",
                "program_id_number": "",
                "department_id": 4
            }
        ]
    },
    {
        "id": 5,
        "name": "Service Canada",
        "programs": [
            {
                "id": 59,
                "name": "OCS",
                "program_id_number": "TBD - expect sub-sub program level on the 'latest' PAA.",
                "department_id": 5
            }
        ]
    },
    {
        "id": 6,
        "name": "Shared Services Canada",
        "programs": [
            {
                "id": 61,
                "name": "Email and Mobile Enterprise Server Services",
                "program_id_number": "1.1.1.3",
                "department_id": 6
            },
            {
                "id": 62,
                "name": "Dedicated Application Hosting and Management Services",
                "program_id_number": "1.1.2.2",
                "department_id": 6
            },
            {
                "id": 63,
                "name": "Voice Network Services",
                "program_id_number": "1.1.3.3",
                "department_id": 6
            },
            {
                "id": 64,
                "name": "Conferencing Services",
                "program_id_number": "1.1.3.4",
                "department_id": 6
            },
            {
                "id": 65,
                "name": "Utility Computing Services",
                "program_id_number": "1.1.2.1",
                "department_id": 6
            },
            {
                "id": 66,
                "name": "Desktop and Office Productivity Suite Services",
                "program_id_number": "1.1.1.2",
                "department_id": 6
            },
            {
                "id": 67,
                "name": "File\/Print Services",
                "program_id_number": "1.1.1.4",
                "department_id": 6
            },
            {
                "id": 68,
                "name": "Data Network Infrastructure Services, Inter- and Intra-Data Centre Network Services",
                "program_id_number": "1.1.3.1, 1.1.3.2",
                "department_id": 6
            },
            {
                "id": 69,
                "name": "Data Network Infrastructure Services",
                "program_id_number": "1.1.3.1",
                "department_id": 6
            },
            {
                "id": 70,
                "name": "Identification, Authentication and Authorization Services",
                "program_id_number": "1.1.4.2",
                "department_id": 6
            },
            {
                "id": 71,
                "name": "Remote Access Services, Identification, Authentication and Authorization Services,\n Secure Communication Services",
                "program_id_number": "1.1.1.5, 1.1.4.2, 1.1.4.3",
                "department_id": 6
            },
            {
                "id": 72,
                "name": "Workstation Services",
                "program_id_number": "1.1.1.1",
                "department_id": 6
            },
            {
                "id": 73,
                "name": "Data Network Infrastructure Services, Inter- and Intra-Data Centre Network Services, Voice Network Services",
                "program_id_number": "1.1.3.1, 1.1.3.2, 1.1.3.3",
                "department_id": 6
            }
        ]
    },
    {
        "id": 7,
        "name": "Yes",
        "programs": [
            {
                "id": 74,
                "name": "Desktop and Office Productivity Suite Services, File\/Print Services",
                "program_id_number": "1.1.1.2, 1.1.1.4",
                "department_id": 7
            }
        ]
    },
    {
        "id": 8,
        "name": "Immigration, Refugees and Citizenship Canada",
        "programs": [
            {
                "id": 75,
                "name": "Temporary Work Authorization",
                "program_id_number": "1.2.2",
                "department_id": 8
            },
            {
                "id": 76,
                "name": "Eligibility and Admissibility Screening Status and Documents",
                "program_id_number": "4.2.2",
                "department_id": 8
            },
            {
                "id": 77,
                "name": "International Students",
                "program_id_number": "1.2.1",
                "department_id": 8
            },
            {
                "id": 78,
                "name": "International Experience Canada",
                "program_id_number": "1.2.3",
                "department_id": 8
            },
            {
                "id": 79,
                "name": "Federal Skilled Workers",
                "program_id_number": "1.1.1",
                "department_id": 8
            },
            {
                "id": 80,
                "name": "Federal Skilled Trades",
                "program_id_number": "1.1.2",
                "department_id": 8
            },
            {
                "id": 81,
                "name": "Canadian Experience Class",
                "program_id_number": "1.1.6",
                "department_id": 8
            },
            {
                "id": 82,
                "name": "Federal Business Immigrants",
                "program_id_number": "1.1.7",
                "department_id": 8
            },
            {
                "id": 83,
                "name": "Caregiver",
                "program_id_number": "1.1.5",
                "department_id": 8
            },
            {
                "id": 84,
                "name": "Quebec Skilled Workers",
                "program_id_number": "1.1.3",
                "department_id": 8
            },
            {
                "id": 85,
                "name": "Quebec Business",
                "program_id_number": "1.1.8",
                "department_id": 8
            },
            {
                "id": 86,
                "name": "Provincial Nominees",
                "program_id_number": "1.1.4",
                "department_id": 8
            },
            {
                "id": 87,
                "name": "Spouses, Partners and Children Reunification",
                "program_id_number": "2.1.1",
                "department_id": 8
            },
            {
                "id": 88,
                "name": "Parents and Grandparents",
                "program_id_number": "2.1.2",
                "department_id": 8
            },
            {
                "id": 89,
                "name": "Family and Discretionary Immigration",
                "program_id_number": "2.1",
                "department_id": 8
            },
            {
                "id": 90,
                "name": "Humanitarian and Compassionate and Public Policy Considerations",
                "program_id_number": "2.1.3",
                "department_id": 8
            },
            {
                "id": 91,
                "name": "Refugee Protection",
                "program_id_number": "2.2.1-4",
                "department_id": 8
            },
            {
                "id": 92,
                "name": "Refugee Protection",
                "program_id_number": "2.2",
                "department_id": 8
            },
            {
                "id": 93,
                "name": "In-Canada Asylum",
                "program_id_number": "2.2.4",
                "department_id": 8
            },
            {
                "id": 94,
                "name": "Immigration Loan Program",
                "program_id_number": "3.1.3",
                "department_id": 8
            },
            {
                "id": 95,
                "name": "Pre-removal Risk Assessment",
                "program_id_number": "2.2.5",
                "department_id": 8
            },
            {
                "id": 96,
                "name": "Migration Control and Security Management",
                "program_id_number": "4.2",
                "department_id": 8
            },
            {
                "id": 97,
                "name": "Newcomer Settlement and Integration",
                "program_id_number": "3.1\n3.1.1 (3.1.1.1 and 3.1.1.2",
                "department_id": 8
            },
            {
                "id": 98,
                "name": "Settlement",
                "program_id_number": "3.1.1",
                "department_id": 8
            },
            {
                "id": 99,
                "name": "Eligibility and Admissibility Screening, Status and Documents",
                "program_id_number": "4.2.2",
                "department_id": 8
            },
            {
                "id": 100,
                "name": "Identity Management",
                "program_id_number": "4.2.1",
                "department_id": 8
            },
            {
                "id": 101,
                "name": "Resettlement Assistance Program",
                "program_id_number": "3.1.4",
                "department_id": 8
            },
            {
                "id": 102,
                "name": "Interim Federal Health",
                "program_id_number": "4.1.3",
                "department_id": 8
            },
            {
                "id": 103,
                "name": "Medical Surveillance and Notification",
                "program_id_number": "4.1.2",
                "department_id": 8
            },
            {
                "id": 104,
                "name": "Citizenship Acquisition, Confirmation and Revocation",
                "program_id_number": "3.2.2",
                "department_id": 8
            },
            {
                "id": 105,
                "name": "Citizenship Awareness",
                "program_id_number": "3.2.1",
                "department_id": 8
            },
            {
                "id": 106,
                "name": "Passport",
                "program_id_number": "4.4",
                "department_id": 8
            },
            {
                "id": 107,
                "name": "Permanent Economic Residents\nTemporary Economic Residents\nFamily and Discretionary Immigration\nRefugee Protection",
                "program_id_number": "1.1, 2.1, 2.2",
                "department_id": 8
            },
            {
                "id": 108,
                "name": "Global Assistance to Irregular Migrants",
                "program_id_number": "4.2.3",
                "department_id": 8
            },
            {
                "id": 109,
                "name": "ATIP Processing and Reporting",
                "program_id_number": "5.1.1",
                "department_id": 8
            },
            {
                "id": 110,
                "name": "Permanent Economic Residents,\nTemporary Economic Residents,\nFamily and Discretionary Immigration,\nRefugee Protection",
                "program_id_number": "1.1, 1.2, 2.1, 2.2",
                "department_id": 8
            }
        ]
    },
    {
        "id": 9,
        "name": "Innovation, Science and Economic Development Canada",
        "programs": [
            {
                "id": 111,
                "name": "Competition Law Enforcement",
                "program_id_number": "1.2.1",
                "department_id": 9
            },
            {
                "id": 112,
                "name": "Intellectual Property",
                "program_id_number": "1.1.4",
                "department_id": 9
            },
            {
                "id": 113,
                "name": "Internal Services",
                "program_id_number": "4.2",
                "department_id": 9
            },
            {
                "id": 114,
                "name": "Automotive Innovation",
                "program_id_number": "2.2.1",
                "department_id": 9
            },
            {
                "id": 115,
                "name": "Aerospace and Defense Innovation",
                "program_id_number": "2.2.2",
                "department_id": 9
            },
            {
                "id": 116,
                "name": "Service for Busines",
                "program_id_number": "3.1.2",
                "department_id": 9
            },
            {
                "id": 117,
                "name": "Federal Incorporations",
                "program_id_number": "1.1.3",
                "department_id": 9
            },
            {
                "id": 118,
                "name": "Trade Measurement",
                "program_id_number": "1.1.1",
                "department_id": 9
            },
            {
                "id": 119,
                "name": "Insolvency",
                "program_id_number": "1.1.2",
                "department_id": 9
            },
            {
                "id": 120,
                "name": "Consumer Affairs",
                "program_id_number": "1.1.6",
                "department_id": 9
            },
            {
                "id": 121,
                "name": "Spectrum Management and Regulation",
                "program_id_number": "1.3.2",
                "department_id": 9
            },
            {
                "id": 122,
                "name": "Computer and Internet Access",
                "program_id_number": "3.3.2",
                "department_id": 9
            },
            {
                "id": 123,
                "name": "Northern Ontario Economic Development",
                "program_id_number": "3.3.1",
                "department_id": 9
            }
        ]
    },
    {
        "id": 10,
        "name": "Canada Revenue Agency",
        "programs": [
            {
                "id": 124,
                "name": "T1 Program",
                "program_id_number": "1.2.1",
                "department_id": 10
            },
            {
                "id": 125,
                "name": "Taxfiler Representative Identification System (TRIS)",
                "program_id_number": "1.2.1 & 1.2.2",
                "department_id": 10
            },
            {
                "id": 126,
                "name": "GST\/HST Returns",
                "program_id_number": "1.2.2",
                "department_id": 10
            },
            {
                "id": 127,
                "name": "GST\/HST Rulings",
                "program_id_number": "1.1.6",
                "department_id": 10
            },
            {
                "id": 128,
                "name": "T2 Program",
                "program_id_number": "1.2.2",
                "department_id": 10
            },
            {
                "id": 129,
                "name": "Specialty Business Returns",
                "program_id_number": "1.2.2",
                "department_id": 10
            },
            {
                "id": 130,
                "name": "Income Tax Rulings",
                "program_id_number": "1.1.6",
                "department_id": 10
            },
            {
                "id": 131,
                "name": "Charities Directorate",
                "program_id_number": "1.1.7",
                "department_id": 10
            },
            {
                "id": 132,
                "name": "Specialty Business Returns",
                "program_id_number": "1.2 & 1.3",
                "department_id": 10
            },
            {
                "id": 133,
                "name": "Canada Child Benefit (CCB)",
                "program_id_number": "2.1.4",
                "department_id": 10
            },
            {
                "id": 134,
                "name": "Goods and services tax \/ harmonized sales tax credit (GST\/HST credit)",
                "program_id_number": "2.1",
                "department_id": 10
            },
            {
                "id": 135,
                "name": "Children's Special Allowances (CSA)",
                "program_id_number": "2.1.2",
                "department_id": 10
            },
            {
                "id": 136,
                "name": "Working income tax benefit (WITB) advance payments",
                "program_id_number": "2.1.4",
                "department_id": 10
            },
            {
                "id": 137,
                "name": "BC low income climate action tax credit (BCLICATC); Saskatchewan low-income tax credit (SLITC); Nova Scotia affordable living tax credit (NSALTC); Newfoundland and Labrador harmonized sales tax credit (NLHSTC) and Newfoundland and Labrador seniors’ benefit (NLSB); Prince Edward Island sales tax credit (PEISTC); Ontario Trillium Benefit (OTB); Ontario sales tax credit (OSTC); Ontario energy and property tax credit (OEPTC); Northern Ontario energy credit (NOEC)",
                "program_id_number": "2.1.4",
                "department_id": 10
            },
            {
                "id": 138,
                "name": "BC early childhood tax benefit (BCECTB); Alberta family employment tax credit (AFETC); Ontario child benefit (OCB); New Brunswick child tax benefit (NBCTB), New Brunswick working income supplement (NBWIS) and New Brunswick school supplement (NBSS); Nova Scotia child benefit (NSCB); Newfoundland and Labrador child benefit (NLCB) and Mother baby nutrition supplement (MBNS); Yukon child benefit (YCB); Northwest Territories child benefit (NWTCB) and Territorial workers’ supplement (TWS); Nunavut child benefit (NUCB) and Territorial workers’ supplement (TWS)",
                "program_id_number": "2.1.4",
                "department_id": 10
            },
            {
                "id": 139,
                "name": "Objections",
                "program_id_number": "1.5.8",
                "department_id": 10
            },
            {
                "id": 140,
                "name": "T3 Program",
                "program_id_number": "1.2.1",
                "department_id": 10
            },
            {
                "id": 141,
                "name": "Business Number",
                "program_id_number": "1.2.2",
                "department_id": 10
            }
        ]
    },
    {
        "id": 11,
        "name": "PSPC",
        "programs": [
            {
                "id": 142,
                "name": "General Procurement Services",
                "program_id_number": "1.1.1",
                "department_id": 11
            },
            {
                "id": 143,
                "name": "General Procurement Services",
                "program_id_number": "1.1.2",
                "department_id": 11
            },
            {
                "id": 144,
                "name": "Acquisition Support and Innovation",
                "program_id_number": "1.1.4",
                "department_id": 11
            },
            {
                "id": 145,
                "name": "Federal Pay and Pension Administration",
                "program_id_number": "1.5.1",
                "department_id": 11
            },
            {
                "id": 151,
                "name": "Federal accommodation",
                "program_id_number": "1.2.1",
                "department_id": 11
            },
            {
                "id": 152,
                "name": "Real Property Services",
                "program_id_number": "1.2.3",
                "department_id": 11
            },
            {
                "id": 153,
                "name": "Payment in Lieu of Taxes",
                "program_id_number": "1.2.4",
                "department_id": 11
            },
            {
                "id": 155,
                "name": "Translation and Other Linguistic Services",
                "program_id_number": "1.6.2",
                "department_id": 11
            },
            {
                "id": 156,
                "name": "Translation and Interpretation to Parliament  & Conference Interpretation",
                "program_id_number": "1.6.4",
                "department_id": 11
            },
            {
                "id": 157,
                "name": "Terminology Standardization Program",
                "program_id_number": "1.6.1",
                "department_id": 11
            },
            {
                "id": 158,
                "name": "Contract Security",
                "program_id_number": "1.4.1",
                "department_id": 11
            },
            {
                "id": 159,
                "name": "Integrity Framework",
                "program_id_number": "1.4.4",
                "department_id": 11
            },
            {
                "id": 160,
                "name": "Controlled Goods",
                "program_id_number": "1.4.2",
                "department_id": 11
            },
            {
                "id": 161,
                "name": "Forensic Accounting Services",
                "program_id_number": "1.4.3",
                "department_id": 11
            },
            {
                "id": 162,
                "name": "Fairness Monitoriing and Business Dispute Management",
                "program_id_number": "1.4.5",
                "department_id": 11
            },
            {
                "id": 163,
                "name": "Government of Canada Administrative Services Sub-Program",
                "program_id_number": "1.7.14",
                "department_id": 11
            },
            {
                "id": 164,
                "name": "Government of Canada Administration Services",
                "program_id_number": "1.7.14",
                "department_id": 11
            },
            {
                "id": 168,
                "name": "Standards Development and Certification",
                "program_id_number": "1.7.17",
                "department_id": 11
            },
            {
                "id": 169,
                "name": "Asset Disposal",
                "program_id_number": "1.7.16",
                "department_id": 11
            },
            {
                "id": 170,
                "name": "Shared Travel Services",
                "program_id_number": "1.7.7",
                "department_id": 11
            },
            {
                "id": 172,
                "name": "Government Information Services",
                "program_id_number": "1.7.4",
                "department_id": 11
            }
        ]
    },
    {
        "id": 12,
        "name": "PWGSC",
        "programs": [
            {
                "id": 146,
                "name": "Federal Pay and Pension Administration",
                "program_id_number": "1.5.1",
                "department_id": 12
            },
            {
                "id": 147,
                "name": "Federal Pay and Pension Administration",
                "program_id_number": "1.5.2",
                "department_id": 12
            },
            {
                "id": 148,
                "name": "Stewardship of Consolidated Revenue Fund and Accounts of Canada",
                "program_id_number": "1.3.1",
                "department_id": 12
            },
            {
                "id": 149,
                "name": "Receiver General Services",
                "program_id_number": "1.3.2",
                "department_id": 12
            },
            {
                "id": 150,
                "name": "Federal accommodation",
                "program_id_number": "1.2.1",
                "department_id": 12
            },
            {
                "id": 154,
                "name": "Real Property Services",
                "program_id_number": "1.2.3",
                "department_id": 12
            },
            {
                "id": 171,
                "name": "Document Imaging Services",
                "program_id_number": "1.7.4",
                "department_id": 12
            }
        ]
    },
    {
        "id": 13,
        "name": "CIOB - TBS",
        "programs": [
            {
                "id": 165,
                "name": "Government of Canada Administration Services Sub-Program",
                "program_id_number": "1.7.14",
                "department_id": 13
            },
            {
                "id": 166,
                "name": "Government of Canada Administrative Services Sub-Program",
                "program_id_number": "1.7.14",
                "department_id": 13
            }
        ]
    },
    {
        "id": 14,
        "name": "Office of the Chief Human Resources Officer - TBS",
        "programs": [
            {
                "id": 167,
                "name": "Government of Canada Administrative Services Sub-Program",
                "program_id_number": "1.7.14",
                "department_id": 14
            }
        ]
    },
    {
        "id": 15,
        "name": "Veterans Affairs Canada",
        "programs": [
            {
                "id": 173,
                "name": "Disability and Death Compensation",
                "program_id_number": "1.1.1.1",
                "department_id": 15
            },
            {
                "id": 174,
                "name": "Disability and Death Compensation",
                "program_id_number": "1.1.2.1",
                "department_id": 15
            },
            {
                "id": 175,
                "name": "Financial Support Program",
                "program_id_number": "1.2.1.4",
                "department_id": 15
            },
            {
                "id": 176,
                "name": "Disability and Death Compensation",
                "program_id_number": "1.1.1.2",
                "department_id": 15
            },
            {
                "id": 177,
                "name": "Disability and Death Compensation",
                "program_id_number": "1.1.1.3",
                "department_id": 15
            },
            {
                "id": 178,
                "name": "Disability and Death Compensation",
                "program_id_number": "1.1.1.4",
                "department_id": 15
            },
            {
                "id": 179,
                "name": "Disability and Death Compensation",
                "program_id_number": "1.1.3",
                "department_id": 15
            },
            {
                "id": 180,
                "name": "Health Care Program and Re-establishment Services",
                "program_id_number": "1.3.6",
                "department_id": 15
            },
            {
                "id": 181,
                "name": "Health Care Program and Re-establishment Services",
                "program_id_number": "1.3.5",
                "department_id": 15
            },
            {
                "id": 182,
                "name": "Health Care Program and Re-establishment Services",
                "program_id_number": "1.3.3.1",
                "department_id": 15
            },
            {
                "id": 183,
                "name": "Health Care Program and Re-establishment Services",
                "program_id_number": "1.3.4",
                "department_id": 15
            },
            {
                "id": 184,
                "name": "Financial Support Program",
                "program_id_number": "1.2.1.2",
                "department_id": 15
            },
            {
                "id": 185,
                "name": "Financial Support Program",
                "program_id_number": "1.2.1.1",
                "department_id": 15
            },
            {
                "id": 186,
                "name": "Disability and Death Compensation",
                "program_id_number": "1.1.2.2",
                "department_id": 15
            },
            {
                "id": 187,
                "name": "Financial Support Program",
                "program_id_number": "1.2.1.3",
                "department_id": 15
            },
            {
                "id": 188,
                "name": "Financial Support Program",
                "program_id_number": "1.2.2",
                "department_id": 15
            },
            {
                "id": 189,
                "name": "Health Care Program and Re-establishment Services",
                "program_id_number": "1.3.1",
                "department_id": 15
            },
            {
                "id": 190,
                "name": "N\/A",
                "program_id_number": "n\/a",
                "department_id": 15
            },
            {
                "id": 191,
                "name": "Health Care Program and Re-establishment Services",
                "program_id_number": "1.3.2",
                "department_id": 15
            },
            {
                "id": 192,
                "name": "Canada Remembers Program",
                "program_id_number": "2.1.1",
                "department_id": 15
            },
            {
                "id": 193,
                "name": "Canada Remembers Program",
                "program_id_number": "2.1.2",
                "department_id": 15
            },
            {
                "id": 194,
                "name": "Canada Remembers Program",
                "program_id_number": "2.1.3",
                "department_id": 15
            },
            {
                "id": 195,
                "name": "Canada Remembers Program",
                "program_id_number": "2.1.4",
                "department_id": 15
            },
            {
                "id": 196,
                "name": "Canada Remembers Program",
                "program_id_number": "2.1.5",
                "department_id": 15
            }
        ]
    }
]
```

### HTTP Request
`GET api/departments`

`HEAD api/departments`


<!-- END_2a2bd5f635421bebeab28f82894cfdaa -->

<!-- START_987c0aa639e88c0aad48c5924fc5ad5f -->
## Get a Specific Department

> Example request:

```bash
curl -X GET "http://service-dashboard.dev/api/departments/{department}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://service-dashboard.dev/api/departments/{department}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "Agriculture and Agri-Food Canada",
    "programs": [
        {
            "id": 1,
            "name": "AgriRisk Initiatives",
            "program_id_number": "1.1.5",
            "department_id": 1
        },
        {
            "id": 2,
            "name": "Career Focus Program",
            "program_id_number": "2.2.2",
            "department_id": 1
        },
        {
            "id": 3,
            "name": "Farm Debt Mediation Service",
            "program_id_number": "2.2.1",
            "department_id": 1
        },
        {
            "id": 4,
            "name": "Churchill Port Utilization Program",
            "program_id_number": "2.2.6",
            "department_id": 1
        },
        {
            "id": 5,
            "name": "AgriMarketing - Assurance System",
            "program_id_number": "1.2.4",
            "department_id": 1
        },
        {
            "id": 6,
            "name": "AgriMarketing - Market Development Stream",
            "program_id_number": "1.2.3",
            "department_id": 1
        },
        {
            "id": 7,
            "name": "AgriCompetitiveness",
            "program_id_number": "2.2.2",
            "department_id": 1
        },
        {
            "id": 8,
            "name": "Career Focus Program (AYGJI is an initiaitve under te borader YES Career Focus program)",
            "program_id_number": "2.2.2",
            "department_id": 1
        },
        {
            "id": 9,
            "name": "AgriInvest",
            "program_id_number": "1.1.2",
            "department_id": 1
        },
        {
            "id": 10,
            "name": "AgriStability",
            "program_id_number": "1.1.1",
            "department_id": 1
        },
        {
            "id": 11,
            "name": "Canadian Agricultural Adaptation Program",
            "program_id_number": "2.2.7",
            "department_id": 1
        },
        {
            "id": 12,
            "name": "AgriInnovation",
            "program_id_number": "2.1.3",
            "department_id": 1
        },
        {
            "id": 13,
            "name": "AgriInnovation",
            "program_id_number": "2.1.4",
            "department_id": 1
        },
        {
            "id": 14,
            "name": "Agricultural Greenhouse Gas Program",
            "program_id_number": "2.1.7",
            "department_id": 1
        },
        {
            "id": 15,
            "name": "Market Infromation and Analysis",
            "program_id_number": "1.2.3",
            "department_id": 1
        },
        {
            "id": 16,
            "name": "International Trade Shows",
            "program_id_number": "1.2",
            "department_id": 1
        },
        {
            "id": 17,
            "name": "Global Market Information and Analysis",
            "program_id_number": "1.2",
            "department_id": 1
        },
        {
            "id": 18,
            "name": "Canada Brand",
            "program_id_number": "1.2",
            "department_id": 1
        },
        {
            "id": 19,
            "name": "Market Access",
            "program_id_number": "1.2",
            "department_id": 1
        },
        {
            "id": 20,
            "name": "Agriculture and Agri-Food Canada Food Research and Development Centre's Industrial Program",
            "program_id_number": "2.1.1",
            "department_id": 1
        },
        {
            "id": 21,
            "name": "Office of Intellectual Properities and Commercialization",
            "program_id_number": "2.1",
            "department_id": 1
        },
        {
            "id": 22,
            "name": "Drought Watch",
            "program_id_number": "2.1.1",
            "department_id": 1
        },
        {
            "id": 23,
            "name": "Canadian Soil Information System",
            "program_id_number": "2.1.1",
            "department_id": 1
        },
        {
            "id": 24,
            "name": "Geospatial\nProducts",
            "program_id_number": "2.1.1",
            "department_id": 1
        },
        {
            "id": 25,
            "name": "ATIP",
            "program_id_number": "3.1.2",
            "department_id": 1
        }
    ]
}
```

### HTTP Request
`GET api/departments/{department}`

`HEAD api/departments/{department}`


<!-- END_987c0aa639e88c0aad48c5924fc5ad5f -->

<!-- START_dfa90c91b62d501c82e282939c2ad455 -->
## Get Programs for a Department

> Example request:

```bash
curl -X GET "http://service-dashboard.dev/api/departments/{department}/programs" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://service-dashboard.dev/api/departments/{department}/programs",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "AgriRisk Initiatives",
        "program_id_number": "1.1.5",
        "department_id": 1
    },
    {
        "id": 2,
        "name": "Career Focus Program",
        "program_id_number": "2.2.2",
        "department_id": 1
    },
    {
        "id": 3,
        "name": "Farm Debt Mediation Service",
        "program_id_number": "2.2.1",
        "department_id": 1
    },
    {
        "id": 4,
        "name": "Churchill Port Utilization Program",
        "program_id_number": "2.2.6",
        "department_id": 1
    },
    {
        "id": 5,
        "name": "AgriMarketing - Assurance System",
        "program_id_number": "1.2.4",
        "department_id": 1
    },
    {
        "id": 6,
        "name": "AgriMarketing - Market Development Stream",
        "program_id_number": "1.2.3",
        "department_id": 1
    },
    {
        "id": 7,
        "name": "AgriCompetitiveness",
        "program_id_number": "2.2.2",
        "department_id": 1
    },
    {
        "id": 8,
        "name": "Career Focus Program (AYGJI is an initiaitve under te borader YES Career Focus program)",
        "program_id_number": "2.2.2",
        "department_id": 1
    },
    {
        "id": 9,
        "name": "AgriInvest",
        "program_id_number": "1.1.2",
        "department_id": 1
    },
    {
        "id": 10,
        "name": "AgriStability",
        "program_id_number": "1.1.1",
        "department_id": 1
    },
    {
        "id": 11,
        "name": "Canadian Agricultural Adaptation Program",
        "program_id_number": "2.2.7",
        "department_id": 1
    },
    {
        "id": 12,
        "name": "AgriInnovation",
        "program_id_number": "2.1.3",
        "department_id": 1
    },
    {
        "id": 13,
        "name": "AgriInnovation",
        "program_id_number": "2.1.4",
        "department_id": 1
    },
    {
        "id": 14,
        "name": "Agricultural Greenhouse Gas Program",
        "program_id_number": "2.1.7",
        "department_id": 1
    },
    {
        "id": 15,
        "name": "Market Infromation and Analysis",
        "program_id_number": "1.2.3",
        "department_id": 1
    },
    {
        "id": 16,
        "name": "International Trade Shows",
        "program_id_number": "1.2",
        "department_id": 1
    },
    {
        "id": 17,
        "name": "Global Market Information and Analysis",
        "program_id_number": "1.2",
        "department_id": 1
    },
    {
        "id": 18,
        "name": "Canada Brand",
        "program_id_number": "1.2",
        "department_id": 1
    },
    {
        "id": 19,
        "name": "Market Access",
        "program_id_number": "1.2",
        "department_id": 1
    },
    {
        "id": 20,
        "name": "Agriculture and Agri-Food Canada Food Research and Development Centre's Industrial Program",
        "program_id_number": "2.1.1",
        "department_id": 1
    },
    {
        "id": 21,
        "name": "Office of Intellectual Properities and Commercialization",
        "program_id_number": "2.1",
        "department_id": 1
    },
    {
        "id": 22,
        "name": "Drought Watch",
        "program_id_number": "2.1.1",
        "department_id": 1
    },
    {
        "id": 23,
        "name": "Canadian Soil Information System",
        "program_id_number": "2.1.1",
        "department_id": 1
    },
    {
        "id": 24,
        "name": "Geospatial\nProducts",
        "program_id_number": "2.1.1",
        "department_id": 1
    },
    {
        "id": 25,
        "name": "ATIP",
        "program_id_number": "3.1.2",
        "department_id": 1
    }
]
```

### HTTP Request
`GET api/departments/{department}/programs`

`HEAD api/departments/{department}/programs`


<!-- END_dfa90c91b62d501c82e282939c2ad455 -->

<!-- START_3987c921d474679cba5c5ce3c9191416 -->
## Get Services for a Department

> Example request:

```bash
curl -X GET "http://service-dashboard.dev/api/departments/{department}/services" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://service-dashboard.dev/api/departments/{department}/services",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "AgriRisk",
        "service_id_number": "AAFC-001",
        "description": "Provides support for research and development, implementation and administration of new risk management tools for use in the agriculture sector. ",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 1,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:00",
        "updated_at": "2017-05-26 19:27:00",
        "department_id": 1
    },
    {
        "id": 2,
        "name": "Career Focus Program",
        "service_id_number": "AAFC-002",
        "description": "Provides funding to organizations for the creation of agricultural internships that provide young Canadians with meaningful career-related work experiences.",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 2,
        "authority": "TB Submission",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 3,
        "name": "Farm Debt Mediation Service",
        "service_id_number": "AAFC-003",
        "description": "Provides financial counselling and mediation services to farmers in financial difficulty.",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 3,
        "authority": "Farm Debt Mediation Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 4,
        "name": "Churchill Port Utilisation Program",
        "service_id_number": "AAFC-004",
        "description": "Provides support to legal entities that arrange for and transact the shipment of eligible grain through the Port of Churchill outward on ocean-going vessels. (Expires March 2017)",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 4,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 5,
        "name": "AgriMarketing Program\nAssurance Systems",
        "service_id_number": "AAFC-005",
        "description": "Provides funding for the development of national assurance systems and standards to support the Canadian agriculture products industry in meeting buyer and market demand for assurance and to enhance its competitiveness at home and abroad. ",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 5,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 6,
        "name": "AgriMarketing Program \nMarket Development",
        "service_id_number": "AAFC-006",
        "description": "Provides funding to industry associations and small and medium sized enterprises to support the implementation of long-term international  strategies aimed at enhancing marketing capacity and improved competitiveness in global markets. ",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 6,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 7,
        "name": "AgriCompetitiveness Program \nFostering Business Development",
        "service_id_number": "AAFC-007",
        "description": "Provides support to national not-for-profit organizations to undertake activities that support agri-businesses to transition, adapt and improve their profitability and resilience by nurturing entrepreneurial capacity. ",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 7,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 8,
        "name": "Agricultural Youth Green Jobs Initiative",
        "service_id_number": "AAFC-008",
        "description": "Help fund internships for post-secondary graduates working in the agriculture industry",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 8,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 9,
        "name": "AgriInvest",
        "service_id_number": "AAFC-009",
        "description": "Provides matching contributions to producers who make annual deposits to an AgriInvest account, to help manage income declines or make investments to mitigate risks or improve market income.",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 9,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 10,
        "name": "AgriStability",
        "service_id_number": "AAFC-010",
        "description": "Provides income support to producers who experience a large margin decline.",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 10,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 11,
        "name": "Canadian Agricultural Adaptation Program \n(2014-2019)",
        "service_id_number": "AAFC-011",
        "description": "Provides support to the agriculture, agri-food, and agri-based products sector to seize opportunities, respond to new and\/or emerging issues, and pathfind and\/or pilot solutions to new and ongoing issues to adapt and remain competitive. ",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 11,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 12,
        "name": "AgriInnovation Program \nIndustry-led Research and Development \n(Stream B)",
        "service_id_number": "AAFC-012",
        "description": "Provides support for pre-commercialization Research, Development and Knowledge Transfer leading to innovative agriculture, agri-food and agri-based practices, processes and products. ",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 12,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 13,
        "name": "AgriInnovation Program  Commercialization (Stream C)",
        "service_id_number": "AAFC-013",
        "description": "Provides repayable contributions to approved industry-led -commercial demonstration, commercialization or adoption projects.",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 13,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 14,
        "name": "Agricultural Greenhouse Gas Program",
        "service_id_number": "AAFC-014",
        "description": "Helps producers find ways to mitigate greenhouse gas (GHG) emissions from their farming operations",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 14,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 15,
        "name": "Domestic Statistics and Market Information Web",
        "service_id_number": "AAFC-015",
        "description": "Provides information on market structure and performance, forecasts, market reports, policy backgrounders, and analysis of various agricutlure products",
        "service_type_id": 2,
        "responsibility_area_id": 2,
        "program_id": 15,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 16,
        "name": "Market Access Single Window",
        "service_id_number": "AAFC-016a",
        "description": "International Trade Shows\nProvides support to enable Canada's presence at international food, fish and seafood shows.",
        "service_type_id": 2,
        "responsibility_area_id": 2,
        "program_id": 16,
        "authority": "TB Submission \/ A-Base",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 17,
        "name": "Market Access Single Window",
        "service_id_number": "AAFC-016b",
        "description": "Market Intelligence and Information Services\nProvides market intelligence reports and trade data to the agriculture, agri-food and seafood industries to increase the Canadian sector's competitiveness in global markets and provides coordinated direct market research reports through provinces to industry to help increase their international business knowledge in order to make more informed business decisions.",
        "service_type_id": 2,
        "responsibility_area_id": 2,
        "program_id": 17,
        "authority": "TB Submisison \/ A-Base",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 18,
        "name": "Market Access Single Window",
        "service_id_number": "AAFC-016c",
        "description": "Canada Brand and Market Development\nProvides the Canadian food and agriculture industry with a competitive advantage, internationally and at home, through a set of tools to positively differentiate the sector.",
        "service_type_id": 2,
        "responsibility_area_id": 2,
        "program_id": 18,
        "authority": "TB Submisison \/ A-Base",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 19,
        "name": "Market Access Single Window",
        "service_id_number": "AAFC-016d",
        "description": "Market Access Services\nProvides a single window email account that allows for 2-way communication with external stakeholders (industry, provinces, territories) on market access through three functions: \n-Incoming requests for information from outside stakeholders;\n - Mechanism to broadcast messages of wide interest to stakeholders;\n - Mechanism to solicit information or feedback from outside stakeholders",
        "service_type_id": 2,
        "responsibility_area_id": 2,
        "program_id": 19,
        "authority": "TB Submisison \/ A-Base",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 20,
        "name": "Food Reseach and Development Centre's Industrial Program",
        "service_id_number": "AAFC-017",
        "description": "Provides clients with direct access to sophisticated equipment and a versatile R&D environment to support agri-food companies with small-scale food processing and testing needs and fosters innovation in the area of food research.",
        "service_type_id": 1,
        "responsibility_area_id": 3,
        "program_id": 20,
        "authority": "A-Based \/ Order-in Council",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 21,
        "name": "Office of Intellectual Properties and Commercialization (OIPC)",
        "service_id_number": "AAFC-018",
        "description": "Supports the development and transfer of the results of research efforts by the Science and Technology Branch (STB) of Agriculture and Agri-Food Canada (AAFC).",
        "service_type_id": 1,
        "responsibility_area_id": 3,
        "program_id": 21,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 22,
        "name": "Drought Watch",
        "service_id_number": "AAFC-019",
        "description": "Provides users with current and historic weather and climate conditions, to see how current conditions differ from normal, to see where and how weather and climate conditions and events are impacting the sector, to view short-term forecasting products, and to learn about ways to mitigate and adapt to the impacts of weather and climate on agricultural operations.",
        "service_type_id": 1,
        "responsibility_area_id": 3,
        "program_id": 22,
        "authority": "A-Base",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 23,
        "name": "Canadian Soil Information System \n(CanSIS)",
        "service_id_number": "AAFC-020",
        "description": "CanSIS works in partnership with the provincial soil mapping groups to maintain and provide access to Canada’s detailed and high level soils data, and other related information.",
        "service_type_id": 1,
        "responsibility_area_id": 3,
        "program_id": 23,
        "authority": "N\/A",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 24,
        "name": "Geospatial Products",
        "service_id_number": "AAFC-021",
        "description": "Provides online access to agriculture-related maps, geospatial data and tools to help clients understand the geography of agriculture and make better decisions for environmentally responsible yet competitive agriculture",
        "service_type_id": 1,
        "responsibility_area_id": 3,
        "program_id": 24,
        "authority": "A-based",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    },
    {
        "id": 25,
        "name": "ATIP Services",
        "service_id_number": "AAFC-022",
        "description": "Provide services to requestors that want to get access to governement records.",
        "service_type_id": 10,
        "responsibility_area_id": 4,
        "program_id": 25,
        "authority": "Minister",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01",
        "department_id": 1
    }
]
```

### HTTP Request
`GET api/departments/{department}/services`

`HEAD api/departments/{department}/services`


<!-- END_3987c921d474679cba5c5ce3c9191416 -->

#Programs
<!-- START_86d53e9643d43f01a320bf290a1bf1f6 -->
## Get a Specific Program

> Example request:

```bash
curl -X GET "http://service-dashboard.dev/api/programs/{program}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://service-dashboard.dev/api/programs/{program}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "AgriRisk Initiatives",
    "program_id_number": "1.1.5",
    "department_id": 1
}
```

### HTTP Request
`GET api/programs/{program}`

`HEAD api/programs/{program}`


<!-- END_86d53e9643d43f01a320bf290a1bf1f6 -->

<!-- START_17ca700d5aa94494ce813a473d9be9d8 -->
## Get Services of a Program

> Example request:

```bash
curl -X GET "http://service-dashboard.dev/api/programs/{program}/services" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://service-dashboard.dev/api/programs/{program}/services",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "AgriRisk",
        "service_id_number": "AAFC-001",
        "description": "Provides support for research and development, implementation and administration of new risk management tools for use in the agriculture sector. ",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 1,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:00",
        "updated_at": "2017-05-26 19:27:00"
    }
]
```

### HTTP Request
`GET api/programs/{program}/services`

`HEAD api/programs/{program}/services`


<!-- END_17ca700d5aa94494ce813a473d9be9d8 -->

#Services
<!-- START_80f2d5622bc4bfdfda56d97cae89dd0c -->
## Get All Services

> Example request:

```bash
curl -X GET "http://service-dashboard.dev/api/services" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://service-dashboard.dev/api/services",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "AgriRisk",
        "service_id_number": "AAFC-001",
        "description": "Provides support for research and development, implementation and administration of new risk management tools for use in the agriculture sector. ",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 1,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:00",
        "updated_at": "2017-05-26 19:27:00"
    },
    {
        "id": 2,
        "name": "Career Focus Program",
        "service_id_number": "AAFC-002",
        "description": "Provides funding to organizations for the creation of agricultural internships that provide young Canadians with meaningful career-related work experiences.",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 2,
        "authority": "TB Submission",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 3,
        "name": "Farm Debt Mediation Service",
        "service_id_number": "AAFC-003",
        "description": "Provides financial counselling and mediation services to farmers in financial difficulty.",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 3,
        "authority": "Farm Debt Mediation Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 4,
        "name": "Churchill Port Utilisation Program",
        "service_id_number": "AAFC-004",
        "description": "Provides support to legal entities that arrange for and transact the shipment of eligible grain through the Port of Churchill outward on ocean-going vessels. (Expires March 2017)",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 4,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 5,
        "name": "AgriMarketing Program\nAssurance Systems",
        "service_id_number": "AAFC-005",
        "description": "Provides funding for the development of national assurance systems and standards to support the Canadian agriculture products industry in meeting buyer and market demand for assurance and to enhance its competitiveness at home and abroad. ",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 5,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 6,
        "name": "AgriMarketing Program \nMarket Development",
        "service_id_number": "AAFC-006",
        "description": "Provides funding to industry associations and small and medium sized enterprises to support the implementation of long-term international  strategies aimed at enhancing marketing capacity and improved competitiveness in global markets. ",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 6,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 7,
        "name": "AgriCompetitiveness Program \nFostering Business Development",
        "service_id_number": "AAFC-007",
        "description": "Provides support to national not-for-profit organizations to undertake activities that support agri-businesses to transition, adapt and improve their profitability and resilience by nurturing entrepreneurial capacity. ",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 7,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 8,
        "name": "Agricultural Youth Green Jobs Initiative",
        "service_id_number": "AAFC-008",
        "description": "Help fund internships for post-secondary graduates working in the agriculture industry",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 8,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 9,
        "name": "AgriInvest",
        "service_id_number": "AAFC-009",
        "description": "Provides matching contributions to producers who make annual deposits to an AgriInvest account, to help manage income declines or make investments to mitigate risks or improve market income.",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 9,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 10,
        "name": "AgriStability",
        "service_id_number": "AAFC-010",
        "description": "Provides income support to producers who experience a large margin decline.",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 10,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 11,
        "name": "Canadian Agricultural Adaptation Program \n(2014-2019)",
        "service_id_number": "AAFC-011",
        "description": "Provides support to the agriculture, agri-food, and agri-based products sector to seize opportunities, respond to new and\/or emerging issues, and pathfind and\/or pilot solutions to new and ongoing issues to adapt and remain competitive. ",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 11,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 12,
        "name": "AgriInnovation Program \nIndustry-led Research and Development \n(Stream B)",
        "service_id_number": "AAFC-012",
        "description": "Provides support for pre-commercialization Research, Development and Knowledge Transfer leading to innovative agriculture, agri-food and agri-based practices, processes and products. ",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 12,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 13,
        "name": "AgriInnovation Program  Commercialization (Stream C)",
        "service_id_number": "AAFC-013",
        "description": "Provides repayable contributions to approved industry-led -commercial demonstration, commercialization or adoption projects.",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 13,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 14,
        "name": "Agricultural Greenhouse Gas Program",
        "service_id_number": "AAFC-014",
        "description": "Helps producers find ways to mitigate greenhouse gas (GHG) emissions from their farming operations",
        "service_type_id": 1,
        "responsibility_area_id": 1,
        "program_id": 14,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 15,
        "name": "Domestic Statistics and Market Information Web",
        "service_id_number": "AAFC-015",
        "description": "Provides information on market structure and performance, forecasts, market reports, policy backgrounders, and analysis of various agricutlure products",
        "service_type_id": 2,
        "responsibility_area_id": 2,
        "program_id": 15,
        "authority": "TB Submission",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 16,
        "name": "Market Access Single Window",
        "service_id_number": "AAFC-016a",
        "description": "International Trade Shows\nProvides support to enable Canada's presence at international food, fish and seafood shows.",
        "service_type_id": 2,
        "responsibility_area_id": 2,
        "program_id": 16,
        "authority": "TB Submission \/ A-Base",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 17,
        "name": "Market Access Single Window",
        "service_id_number": "AAFC-016b",
        "description": "Market Intelligence and Information Services\nProvides market intelligence reports and trade data to the agriculture, agri-food and seafood industries to increase the Canadian sector's competitiveness in global markets and provides coordinated direct market research reports through provinces to industry to help increase their international business knowledge in order to make more informed business decisions.",
        "service_type_id": 2,
        "responsibility_area_id": 2,
        "program_id": 17,
        "authority": "TB Submisison \/ A-Base",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 18,
        "name": "Market Access Single Window",
        "service_id_number": "AAFC-016c",
        "description": "Canada Brand and Market Development\nProvides the Canadian food and agriculture industry with a competitive advantage, internationally and at home, through a set of tools to positively differentiate the sector.",
        "service_type_id": 2,
        "responsibility_area_id": 2,
        "program_id": 18,
        "authority": "TB Submisison \/ A-Base",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 19,
        "name": "Market Access Single Window",
        "service_id_number": "AAFC-016d",
        "description": "Market Access Services\nProvides a single window email account that allows for 2-way communication with external stakeholders (industry, provinces, territories) on market access through three functions: \n-Incoming requests for information from outside stakeholders;\n - Mechanism to broadcast messages of wide interest to stakeholders;\n - Mechanism to solicit information or feedback from outside stakeholders",
        "service_type_id": 2,
        "responsibility_area_id": 2,
        "program_id": 19,
        "authority": "TB Submisison \/ A-Base",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 20,
        "name": "Food Reseach and Development Centre's Industrial Program",
        "service_id_number": "AAFC-017",
        "description": "Provides clients with direct access to sophisticated equipment and a versatile R&D environment to support agri-food companies with small-scale food processing and testing needs and fosters innovation in the area of food research.",
        "service_type_id": 1,
        "responsibility_area_id": 3,
        "program_id": 20,
        "authority": "A-Based \/ Order-in Council",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 21,
        "name": "Office of Intellectual Properties and Commercialization (OIPC)",
        "service_id_number": "AAFC-018",
        "description": "Supports the development and transfer of the results of research efforts by the Science and Technology Branch (STB) of Agriculture and Agri-Food Canada (AAFC).",
        "service_type_id": 1,
        "responsibility_area_id": 3,
        "program_id": 21,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 22,
        "name": "Drought Watch",
        "service_id_number": "AAFC-019",
        "description": "Provides users with current and historic weather and climate conditions, to see how current conditions differ from normal, to see where and how weather and climate conditions and events are impacting the sector, to view short-term forecasting products, and to learn about ways to mitigate and adapt to the impacts of weather and climate on agricultural operations.",
        "service_type_id": 1,
        "responsibility_area_id": 3,
        "program_id": 22,
        "authority": "A-Base",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 23,
        "name": "Canadian Soil Information System \n(CanSIS)",
        "service_id_number": "AAFC-020",
        "description": "CanSIS works in partnership with the provincial soil mapping groups to maintain and provide access to Canada’s detailed and high level soils data, and other related information.",
        "service_type_id": 1,
        "responsibility_area_id": 3,
        "program_id": 23,
        "authority": "N\/A",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 24,
        "name": "Geospatial Products",
        "service_id_number": "AAFC-021",
        "description": "Provides online access to agriculture-related maps, geospatial data and tools to help clients understand the geography of agriculture and make better decisions for environmentally responsible yet competitive agriculture",
        "service_type_id": 1,
        "responsibility_area_id": 3,
        "program_id": 24,
        "authority": "A-based",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 25,
        "name": "ATIP Services",
        "service_id_number": "AAFC-022",
        "description": "Provide services to requestors that want to get access to governement records.",
        "service_type_id": 10,
        "responsibility_area_id": 4,
        "program_id": 25,
        "authority": "Minister",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 26,
        "name": "Learning Services",
        "service_id_number": "CSPS-1",
        "description": "Delivery of the School's learning products ensure federal public service employees have the common knowledge, skills and competencies to fulfill their responsibilities in serving Canadians.",
        "service_type_id": 9,
        "responsibility_area_id": 5,
        "program_id": 26,
        "authority": "Canada School of Public Service Act ",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 27,
        "name": "Enterprise Requested Delivery",
        "service_id_number": "CSPS-2",
        "description": "Requested on-demand, on-site learning, which enables departments to provide their employees with training deemed to be necessary for specific organizations' workplaces and to meet specific departmental priorities \/ needs.",
        "service_type_id": 9,
        "responsibility_area_id": 6,
        "program_id": 26,
        "authority": "Canada School of Public Service Act ",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 28,
        "name": "Official Language Learning Plans",
        "service_id_number": "CSPS-3",
        "description": "Develop official language learning plans for individual learners, including estimates of training required to reach a specific level of proficiency, based on testing and assessment of the individual candidate \/ learner. ",
        "service_type_id": 9,
        "responsibility_area_id": 6,
        "program_id": 26,
        "authority": "Canada School of Public Service Act ",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 29,
        "name": "Licensing",
        "service_id_number": "CFIA-1",
        "description": "The application, issuance and\/or renewal of a license and\/or permit to operate a registered establishment",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 30,
        "name": "Import Certification",
        "service_id_number": "CFIA-2",
        "description": "Permission to import plant, animal or food products into Canada",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 31,
        "name": "Export Certification",
        "service_id_number": "CFIA-3",
        "description": "Permission to export plant, animal or food products out of Canada",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 32,
        "name": "Label Verification",
        "service_id_number": "CFIA-4",
        "description": "Verifying labels for their compliance to the labelling requirements of the respective regulations",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 33,
        "name": "Pre-Market Approval",
        "service_id_number": "CFIA-5",
        "description": "Pre-Market applications for livestock feeds, Plant Breeder's Rights, fertilizers, variety registration, plants with novel traits, and veterinary biologics",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 34,
        "name": "Registration of Establishments",
        "service_id_number": "CFIA-6",
        "description": "Request for approval to produce and or sell food, plant and animal products that will be shipped inter-provincially and internationally. ",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 35,
        "name": "Accreditation",
        "service_id_number": "CFIA-7",
        "description": "Authorization of a third party to perform certain duties and functions in support of CFIA Programs",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 36,
        "name": "Research Authorization",
        "service_id_number": "CFIA-8",
        "description": "Product\/application review and approval\/authorization and issuance of research authorizations",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 37,
        "name": "Exemption",
        "service_id_number": "CFIA-9",
        "description": "Request exemption from registration requirements on the grounds of research",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 38,
        "name": "Advice & Expertise",
        "service_id_number": "CFIA-10",
        "description": "Review, assessment and evaluation by CFIA subject matter experts of relevant materials as needed to inform decision",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 39,
        "name": "Recall Notification",
        "service_id_number": "CFIA-11",
        "description": "Public communication of recalled products.",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 40,
        "name": "Public Enquiries",
        "service_id_number": "CFIA-12",
        "description": "Program related enquiries from the general public and industry stakeholders and forwarding enquiries to other departments when necessary.",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 41,
        "name": "Complaints & Appeals",
        "service_id_number": "CFIA-13",
        "description": "The process that allows stakeholders to register complaints and appeals related to quality of service, administrative errors and regulatory decisions",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 42,
        "name": "Consumer Complaints",
        "service_id_number": "CFIA-14",
        "description": "The process that allows consumers to register complaints",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 43,
        "name": "Guidance",
        "service_id_number": "CFIA-15",
        "description": "Guidance for the provision of information of CFIA regulatory programs, services and requirements, as well as the consequences of non-compliance.",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 44,
        "name": "Decisions",
        "service_id_number": "CFIA-16",
        "description": "The provision of timely information on the outcomes of regulatory activities and enforcement actions.",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 45,
        "name": "Compliance Management",
        "service_id_number": "CFIA-17",
        "description": "Policies, procedures, standards and general guidance that facilitate compliance with related regulations.",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 46,
        "name": "Compliance Promotion",
        "service_id_number": "CFIA-18",
        "description": "Outreach activities that increase awareness, inform, motivate or change behaviour, and encourage compliance with a regulatory requirement",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 47,
        "name": "Surveillance (Monitoring)",
        "service_id_number": "CFIA-19",
        "description": "Conducting a planned sequence of observations or measurements of control parameters to determine the absence or, if present, assess the degree of control of a particular subject",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 48,
        "name": "Inspection",
        "service_id_number": "CFIA-20",
        "description": "Performance of a requested, non-requested or follow-up inspection based on risk, surveillance, investigation or complaint to ensure regulatory compliance",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 49,
        "name": "Testing",
        "service_id_number": "CFIA-21",
        "description": "Diagnostic testing done by a CFIA laboratory",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 50,
        "name": "Auditing",
        "service_id_number": "CFIA-22",
        "description": "CFIA assessment and evaluation of adherence to certain program requirements (not to regulation). ",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 51,
        "name": "Seizure and Detention",
        "service_id_number": "CFIA-23",
        "description": "The seizure and detention any product or other thing by means of or in relation to when an inspector has reasonable grounds to believe that there has been a contravention of the Act and\/or Regulations",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 52,
        "name": "Removal from Canada",
        "service_id_number": "CFIA-24",
        "description": "The CFIA requests removal of imported product into Canada when he or she believes on reasonable grounds that there has been a contravention legislation",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 53,
        "name": "Quarantine",
        "service_id_number": "CFIA-25",
        "description": "A quarantine notice is issued Quarantine is a to prevent the introduction or spread of a disease or pest in Canada by isolating infected animal, plant or thing",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 54,
        "name": "Corrective Action Request",
        "service_id_number": "CFIA-26",
        "description": "The CFIA may issue a Corrective Action Request (CAR) when a formal response from the company is required.",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 55,
        "name": "Hold",
        "service_id_number": "CFIA-27",
        "description": "When a product(s) is suspected to be non-compliant they can be held until a final decision is rendered with respect to their disposition",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 56,
        "name": "Notice of Non-Compliance",
        "service_id_number": "CFIA-28",
        "description": "A Letter of non-compliance is a procedural administrative action that may be sent to a regulated party when an infraction will not cause serious harm, is unintentional and easily-corrected.",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 57,
        "name": "Disposal\/Destruction",
        "service_id_number": "CFIA-29",
        "description": "The disposal and\/or destruction of a regulated product may be ordered where it poses a health and safety risk or threat, is affected by disease or toxin, etc. ",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 58,
        "name": "Mandatory Recall",
        "service_id_number": "CFIA-31",
        "description": "The Minister issues a mandatory recall order when the Minister believes on reasonable grounds that a product poses a risk to public, animal or plant health",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 59,
        "name": "Suspension\/Cancellation of Permission",
        "service_id_number": "CFIA-32",
        "description": "The suspension, cancellation, or revocation of a licence, registration or permit is generally appropriate when the regulated party does not or is unable to comply with the legislative requirements or the application for a licence to operate a registered establishment contains false or misleading information",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 60,
        "name": "Administrative Monetary Penalties",
        "service_id_number": "CFIA-33",
        "description": "An AMP may be issued by the CFIA as an alternative to the existing prosecution system (prosecution) and are a supplement to existing enforcement measures",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 61,
        "name": "Vaccination",
        "service_id_number": "CFIA-34",
        "description": "Vaccination of animals can be used as a means to prevent the spread of disease",
        "service_type_id": null,
        "responsibility_area_id": 7,
        "program_id": 27,
        "authority": null,
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 62,
        "name": "Old Age Security (OAS) Benefits (includes the OAS Pension, GIS and Allowances)",
        "service_id_number": "ESDC-100",
        "description": "The Old Age Security (OAS) pension is a monthly payment available to most Canadians 65 years of age who meet the Canadian legal status and residence requirements. In addition to the Old Age Security pension, there are three types of Old Age Security benefits:\n the Guaranteed Income Supplement, Allowance and Allowance for the Survivor. The OAS provides financial support to millions of seniors, including those that are low-income, each year.",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 28,
        "authority": "Old Age Security Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 63,
        "name": "Canada Pension Plan (CPP) Benefits (includes Retirement Benefits, Disability Benefits and Survivors Benefits)",
        "service_id_number": "ESDC-101",
        "description": "The Canada Pension Plan provides contributors and their families with partial replacement of earnings in the case of retirement, disability or death. The CPP program includes a Retirement pension, Post-retirement benefit, Disability benefits, Survivor benefits and a Death Benefit. ",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 29,
        "authority": "Canada Pension Plan Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 64,
        "name": "Canada Disability Savings Grant and Bond",
        "service_id_number": "ESDC-102",
        "description": "The Canada Disability Savings Bond  provides up to $1,000 of bond  money to the Registered Disability Saving Plans (RDSPs) of people with disabilities with low to modest family incomes.  No contributions to the plan are required to receive bond.   The amount of the bond is based on the beneficiary's family income. There is a lifetime bond limit of $20,000.  The Canada Disability Savings Grant provides up to $3,500 of grant money, based on contributions made into a Registered Disability Saving Plan. Grant amounts are based on the amount contributed and, depending on the beneficiary’s family income, may be up to three times the amount of the beneficiary’s contribution.  There is a lifetime grant limit of $70,000.  The income levels that are used to determine bond and grant amounts are revised annually.",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 30,
        "authority": "Canada Disability Savings Act and Canada Disability Savings Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 65,
        "name": "Grants and Contributions (Gs&Cs)",
        "service_id_number": "ESDC-103",
        "description": "Gs&Cs are transfer payments made to not-for profit, community-based organizations, individuals and to the private and public sectors which support the activities of those groups, and which also help to fulfill the department’s mandate. Annually, ESDC administers approximately $1.8 billion in Gs&Cs funding through a suite of 28 programs delivered both nationally and regionally.\n\n(Excludes  Apprenticeship Grants and other Grants and Contirbutions that are shown separately in the service inventory)",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 31,
        "authority": "Department of Employment and Social Development Act;  Employment Insurance Act (Part II)",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 66,
        "name": "Work-Sharing (WS)",
        "service_id_number": "ESDC-104",
        "description": "WS is an adjustment program designed to help employers and employees avoid layoffs when there is a temporary reduction in the normal level of business activity that is beyond the control of the employer. The measure provides income support to employees eligible for Employment Insurance benefits who work a temporarily reduced work week while their employer recovers.",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 32,
        "authority": "WS operates under the authority of section 24 of the Employment Insurance Act, and sections 42-49 of the EI Regulations.",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 67,
        "name": "Social Insurance Number (SIN)",
        "service_id_number": "ESDC-105",
        "description": "Introduced in 1964, the SIN is a nine-digit number used as a record file identifier for a variety of Government of Canada benefits and services. All personal information provided by the applicant in support of their SIN request, is housed in the SIR.\n\nAs the SIN is currently used to access many federal government on-line program benefits, the SIN\/SIR program is central to Service Canada achieving its mission to modernize Government services to Canadians and improve the integrity of government programs and services.",
        "service_type_id": 4,
        "responsibility_area_id": 8,
        "program_id": 33,
        "authority": "The program is governed by sections 28.1 to 28.4 of the Department of Employment and Social Development Act and sections 138, 139 and 140 of the EI Act; and sections 1 to 14 of the Social Insurance Number Regulations and subsections 89(1) to 89(6) of the EI Regulations.\n",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 68,
        "name": "Employment Insurance (EI)",
        "service_id_number": "ESDC-106",
        "description": "EI provides temporary financial assistance to unemployed Canadians who have lost their job through no fault of their own, while they look for work or upgrade their skills.\nCanadians who are sick, pregnant, or caring for a newborn or adopted child, as well as those who must care for a family member who is seriously ill with a significant risk of death or who must provide care or support to their critically ill or injured child may also be assisted by EI. The program also allows for self-employed individuals to register into it for access to EI special benefits (sickness, maternity, parental, compassionate care and parents of critically ill children benefits).",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 34,
        "authority": "Employment Insurance (EI) Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 69,
        "name": "Labour Market Development Agreements (LMDA)",
        "service_id_number": "ESDC-107",
        "description": "Through Labour Market Development Agreements, provinces and territories provide Employment Insurance-eligible clients with employment benefits and all unemployed Canadians with employment services.",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 35,
        "authority": "EI Act (Section 59-employment benefits; and, section 60 (4)-support measures)",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 70,
        "name": "Apprenticeship Grants (AG)",
        "service_id_number": "ESDC-108",
        "description": "The Apprenticeship Grants (AGs); including the Apprenticeship Incentive Grant and Apprenticeship Completion Grant are incentives to attract Canadians to the trades and to assist apprentices in the Red Seal trades to progress and complete their training.  ",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 36,
        "authority": "Department of Employment and Social Development Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 71,
        "name": "Temporary Foreign Worker Program (TFWP)",
        "service_id_number": "ESDC-109",
        "description": "The TFWP assists employers in filling their genuine labour requirements when qualified Canadians and permanent residents are not available. The Program is employer demand-driven and is an option of last resort for employers to address immediate skills and labour needs on a temporary basis. ",
        "service_type_id": 2,
        "responsibility_area_id": 8,
        "program_id": 37,
        "authority": "Department of Employment and Social Development Act,  Immigration and Refugee Protection Act (IRPA) and \n Immigration and Refugee Protection Regulations (IRPR)",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 72,
        "name": "Federal Income Support for Parents of Murdered or Missing Children (PMMC)",
        "service_id_number": "ESDC-110",
        "description": "The PMMC grant is an income support grant available to applicants who have suffered a loss of income from taking time away from work to cope with the death or disappearance of their child or children, as a result of a probable Criminal Code offence.",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 38,
        "authority": "Department of Employment and  Social Development Act, Canada Labour Code",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 73,
        "name": "Job Bank and Related Job Search Services",
        "service_id_number": "ESDC-111",
        "description": "Job Bank provides timely and relevant labour market information on employment opportunities across Canada to help workers find suitable employment and help employers find suitable workers. Job Bank offers a free and bilingual online job board, delivered in collaboration with all provinces and territories, which allows employers to post available job opportunities and job seekers to search for jobs. In addition, the Web portal includes a variety of economic, labour market and demographic reports, including sectoral and occupational profiles and projections.",
        "service_type_id": 2,
        "responsibility_area_id": 8,
        "program_id": 39,
        "authority": "EI Act subsections 60 (1) and (2); section 58, subsection C of the National Employment Service (Employment Insurance Regulations)",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 74,
        "name": "Labour Market Information",
        "service_id_number": "ESDC-112",
        "description": "Government of Canada's leading source for jobs and labour market information that offers users free occupational and career information such as job opportunities, educational requirements, main duties, wage rates and salaries, current employment trends, and outlooks.  People can make career decisions and see what jobs will be in demand.",
        "service_type_id": 2,
        "responsibility_area_id": 8,
        "program_id": 39,
        "authority": "EI Act - National Employment Service ",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 75,
        "name": "Canada Student Loans Program: National Student Loans Service Centre",
        "service_id_number": "ESDC-113",
        "description": "Canada Student Loans and Grants are administered on behalf of the Federal Government through a third party Service Provider.  The Service Provider (National Student Loans Service Centre ) delivers client and administrative services on behalf of the Government of Canada and the Integrated Provinces (NL, NB, ON, SK and BC) related to the disbursement of loans \/ grants, loan maintenance,  loan repayment and includes repayment assistance measures.  ",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 40,
        "authority": "Canada Student Loans Act  and Canada Student Financial Assistance Act",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 76,
        "name": "Canada Education Savings Grant (CESG) and Canada Learning Bond (CLB)",
        "service_id_number": "ESDC-114",
        "description": "The Canada Education Savings Grant (CESG) is an incentive offered by the Government of Canada to encourage parents, family and friends to save for a child's post-secondary education into an RESP.                                                                                                                                                                   The Canada Learning Bond (CLB) is an incentive offered by the Government of Canada to help encourage low-income families start saving for their children's post-secondary education into an RESP. ",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 41,
        "authority": "Canada Education Savings Act and Canada Education Savings Regulations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 77,
        "name": "Saskatchewan Advantage Grant for Education Savings (SAGES)",
        "service_id_number": "ESDC-115",
        "description": "Saskatchewan Advantage Grant for Education Savings (SAGES) is a provincial incentive designed to encourage parents, family and friends to save for a child's post-secondary education into an RESP.  ESDC administers the incentive on behalf of the province on a cost-recovery basis through an agreement with the Government of Saskatchewan.",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 42,
        "authority": "Saskatchewan Advantage Grant for Education Savings Act ",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 78,
        "name": "General Enquiry Service (1-800-O-Canada and CIS)",
        "service_id_number": "ESDC-116",
        "description": "Provision of general information and client support regarding ESDC and GOC programs and services via 1-800 O Canada  (which provides the public with quick access to general information on GC programs and services, and supports GC communication activities) and the Customized Information Services (which provide specialized, turnkey information services for various departments)",
        "service_type_id": 2,
        "responsibility_area_id": 8,
        "program_id": 43,
        "authority": "PAPS Transfer from PWGSC to ESDC\n- Order-In-Council Number: 2005-1637",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 79,
        "name": "Principal Publisher Service",
        "service_id_number": "ESDC-117",
        "description": "Principal publisher GC manages the publishing and analytics tools for Canada.ca via the Managed Web Service, as well as management of Consulting with Canadians, News.gc.ca, and social media tools.",
        "service_type_id": 11,
        "responsibility_area_id": 8,
        "program_id": 44,
        "authority": "Order in Council\n 2014-349",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 80,
        "name": "Passport Services",
        "service_id_number": "ESDC-118",
        "description": "As mandated by the Canadian Passport Order, responsibilities of the Passport Program include issuing, refusing to issue, revoking, withholding, recovering, and providing instructions on the use of Canadian passports. The Minister of Immigration, Refugees and Citizenship Canada has authority over the Passport Program mandate and has authorized the Minister of ESDC to exercise specified administrative powers. ESDC, through Service Canada, is responsible for passport service delivery in Canada, giving Canadians broad access to passport services across the country.",
        "service_type_id": 4,
        "responsibility_area_id": 8,
        "program_id": 45,
        "authority": "Canadian Passport Order",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 81,
        "name": "Employment Insurance (EI) Premium Reduction Program",
        "service_id_number": "ESDC-119",
        "description": "The EI Premium Reduction Program grants reduced EI premium rates to employers who provide their employees with an eligible short-term disability plan.",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 46,
        "authority": "Section 69 of the Employment Insurance Act and Part III of the Employment Insurance Regulations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 82,
        "name": "Supplemental Unemployment Benefit (SUB) Program",
        "service_id_number": "ESDC-120",
        "description": "The SUB Program registers SUB plans offered by employers. Employers must register their SUB plan before the implementation date of the plan, so that payments do not reduce the amount of an employee's EI benefits due to a period of unemployment due to temporary shortage of work, training, illness, injury or quarantine.",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 47,
        "authority": "Section 37 of the Employment Insurance Regulations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 83,
        "name": "Canadian Occupational Projection System (COPS)",
        "service_id_number": "ESDC-121",
        "description": "ESDC uses the models of the COPS and the National Occupational Classification (NOC, 2011 version) to develop projections of future trends in the numbers of job openings and job seekers by occupation at the national level. The projections allow for identifying those occupations that may face labour shortage or labour surplus conditions over the medium term. Used by the Department, by provinces, by job-seekers and career development counsellors to gauge which occupations may have vacancies in the medium term",
        "service_type_id": 2,
        "responsibility_area_id": 8,
        "program_id": 48,
        "authority": "Department of Employment and Social Development Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 84,
        "name": "Federal Mediation and Conciliation Service (FMCS) - Dispute Resolution Services",
        "service_id_number": "ESDC-122",
        "description": "The FMCS provides dispute resolution assistance to trade unions and employers under the jurisdiction of the Canada Labour Code. The Service also coordinates the appointment of arbitrators to resolve certain types of disputes governed by the Canada Labour Code , such as grievances, unjust dismissals and wage recovery. FMCS also appoints arbitrators in case of Wage Earner Protection Program appeals. ",
        "service_type_id": 4,
        "responsibility_area_id": 8,
        "program_id": 49,
        "authority": "Canada Labour Code (Part I and III) and Wage Earner Protection Program ",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 85,
        "name": "Occupational Health and Safety Tribunal Canada",
        "service_id_number": "ESDC-123",
        "description": "The mission of the Appeals Officers regrouped under the Occupational Health and Safety Tribunal Canada is to ensure expert, independent, unbiased quality decisions to all parties by treating them equally, fairly and with understanding, respect and dignity. \n\nThe mandate of the Appeals Officer is to receive, hear and dispose of appeals of decisions issued by health and safety officers under [ss.129(7)] and directions under [s.146] of the Canada Labour Code, Part II. The appeals Officer shall provide a decision with reasons. The Appeals Officer can intervene in all sectors under federal jurisdiction, such as the Air, Rail, Marine and Oil and Gas sectors, the federal Public Service and businesses like road transportation, ferries, and grain elevators.\n\n",
        "service_type_id": 4,
        "responsibility_area_id": 8,
        "program_id": 50,
        "authority": "Canada Labour Code, Part II",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 86,
        "name": "Workplace Information",
        "service_id_number": "ESDC-124",
        "description": "The mandate of the Workplace Information program is to collect, analyze and disseminate information on collective bargaining, work stoppages, and labour organizations (unions) in Canada. Information products and services offered to industrial relations practitioners (eg. employers, unions, arbitrators, negotiators, mediators, labour law firms), academics, the Bank of Canada, federal and provincial departments, including policy and law makers, as well as the general public. It also provides research and analysis on all areas of the Labour Program to its internal clients across different branches of the Labour Program to support policy development.  \n",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 51,
        "authority": "Canada Labour Code",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 87,
        "name": "Labour  Program\nGrants and Contributions",
        "service_id_number": "ESDC-125",
        "description": "The Labour Funding Program (LFP) provides financial assistance to eligible organizations for a variety of projects and activities linked to labour relations, workplace health and safety, workplace equity and international labour affairs.\n",
        "service_type_id": 1,
        "responsibility_area_id": 9,
        "program_id": 52,
        "authority": "Treasury Board Submission # 836325",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 88,
        "name": "Federal Workers Compensation Service (FWCS) - Government Employees' Compensation Act (GECA)",
        "service_id_number": "ESDC-126",
        "description": "The Labour Program is responsible for the administration of the GECA, which provides compensation benefits for federal employees injured in the course of their work. The adjudication of claims under GECA is currently provided through an administrative agreement with each provincial Workers Compensation Board (WCB).",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 53,
        "authority": "Government Employees' Compensation Act (GECA)",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 89,
        "name": "Federal Workers Compensation Service (FWCS) -  Administration of the Public Service Income Benefit Plan (PSIBP) for Survivors of Employees Slain on Duty",
        "service_id_number": "ESDC-127",
        "description": "This program ensures that federal government employees who have sustained work-related injuries receive timely financial, health care and rehabilitation benefits as well as assistance to ensure early and safe return to work. FWCS adjudicates that an employee was slain on duty, applies the provisions of the Plan, informs eligible survivors, and provides monthly payments. The Labour Program administers this benefit plan  on behalf of TBS.",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 53,
        "authority": "Government Employees' Compensation Act (GECA)",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 90,
        "name": "Merchant Seamen Compensation Act (MServCanA)",
        "service_id_number": "ESDC-128",
        "description": "(MServCanA) provides compensation benefits to merchant seamen engaged in a foreign voyage or home-trade voyage, not otherwise covered under a federal or provincial workers' compensation statute.\n\n",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 53,
        "authority": "Merchant Seamen Compensation Act ",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 91,
        "name": "Internet National Injury Compensation System (iNICS)",
        "service_id_number": "ESDC-129",
        "description": "The Labour Program offers Web-based software that lets federal employers track and analyze compensation claims data. iNICS provides employers with information about their workers' compensation claims. This service is available to federal departments, Crown corporations and agencies covered under the Government Employees Compensation Act. Federal employers can analyze their own data (types of claims, injury dates and related costs, etc.) and use it to generate statistics and reports.\n\nThe iNICS software is available through the Federal Workers' Compensation Service.\n",
        "service_type_id": 9,
        "responsibility_area_id": 8,
        "program_id": 53,
        "authority": "Government Employees' Compensation Act (GECA)",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 92,
        "name": "Legislated Employment Equity Program (LEEP)",
        "service_id_number": "ESDC-130",
        "description": "This service helps employers being regulated ensure that they are compliant with the Employment Equity Act, and it helps the four designated employment equity groups (women, Aboriginal peoples, persons with disabilities and members of visible minorities) ensure that they are fairly represented in the workplace. ",
        "service_type_id": 4,
        "responsibility_area_id": 8,
        "program_id": 54,
        "authority": "Employment Equity Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 93,
        "name": "Federal Contractors Program",
        "service_id_number": "ESDC-131",
        "description": "This service helps employers who are awarded federal government contracts ensure that they are compliant with Treasury Board’s Contracting Policy, and it helps the four designated employment equity groups (women, Aboriginal peoples, persons with disabilities and members of visible minorities) ensure that they are fairly represented in the workplace. ",
        "service_type_id": 4,
        "responsibility_area_id": 8,
        "program_id": 54,
        "authority": "Employment Equity Act                        Treasury Board Contracting Policy: Appendix D",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 94,
        "name": "Occupational Health and Safety (OHS)",
        "service_id_number": "ESDC-132",
        "description": "The Labour Program ensures that federally regulated workplaces (banking; telecommunications; broadcasting; air; interprovincial rail, road, and pipeline transportation; shipping; nuclear facilities; uranium mining and milling; grain handling; the federal public service; and Crown corporations) are healthy, safe and fair by working with employers and employees and ensuring the Canada Labour Code, Part II and its regulations related to occupational health and safety are effective respected. ",
        "service_type_id": 4,
        "responsibility_area_id": 8,
        "program_id": 55,
        "authority": "Part II of the Canada Labour Code",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 95,
        "name": "Labour Standards",
        "service_id_number": "ESDC-133",
        "description": "The Labour Standards (Part III of the Canada Labour Code) program provides for minimum standards of employment for employees and employers under federal jurisdiction. These standards include, but are not limited, to provisions on hours of work, minimum wages, vacation and general holidays, termination notice, severance pay, unjust dismissal and various types of leave.  Labour standards ensure that employees are given fair and equitable employment conditions. Minimum standards also provide a level playing field for employers in the marketplace.  It also offers a way for employees These provisions also offer a way for employees to recover unpaid wages and seek recourse, if they are unjustly dismissed. \n\n\n",
        "service_type_id": 4,
        "responsibility_area_id": 8,
        "program_id": 56,
        "authority": "Part III of the Canada Labour Code",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 96,
        "name": "Wage Earner Protection Program",
        "service_id_number": "ESDC-134",
        "description": "The Wage Earner Protection Program makes payments to eligible workers for unpaid wages, vacation, severance and termination pay they are owed when their employer declares bankruptcy or becomes subject to a receivership under the Bankruptcy and Insolvency Act.",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 57,
        "authority": "Wage Earner Protection Program Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 97,
        "name": "British Columbia Training and Education Savings Grant",
        "service_id_number": "ESDC-135",
        "description": "British Columbia Training and Education Savings Grant (BCTESG) is a provincial incentive designed to encourage parents, family and friends to  save for a child's post-secondary education into an RESP. ESDC administers the incentive on behalf of the province on a cost recovery basis through an agreement with the Government of British Columbia.",
        "service_type_id": 1,
        "responsibility_area_id": 8,
        "program_id": 58,
        "authority": "British Columbia Training and Education Savings Grant Act ",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 98,
        "name": "Federal Mediation and Conciliation Service (FMCS) - Relationship Development Program",
        "service_id_number": "ESDC-136",
        "description": "The FMCS provides dispute prevention assistance to trade unions and employers under the jurisdiction of the Canada Labour Code. Dispute prevention services are offered to help parties improve their relationship during the term of the collective agreement thus preventing disputes before they occur. These can involve skills development activities (e.g. training workshops), facilitation as well as grievance mediation services.",
        "service_type_id": 4,
        "responsibility_area_id": 8,
        "program_id": 49,
        "authority": "Canada Labour Code (Part I)",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 99,
        "name": "Office for Client Satisfaction",
        "service_id_number": "ESDC-137",
        "description": "The Office for Client Satisfaction (OCS) receives, reviews, and acts on client comments, compliments, complaints and suggestions about the quality of services and service interactions received from Service Canada. As an integral part of ESDC's recourse mechanism, OCS delivers prompt service, offers thorough and impartial reviews, and provides personalized attention to clients' issue. The OCS produces reports, and analyses of feedback collected from clients on service improvements. Thus, it is considred Service Canada's key commitment to delivering service excellence for Canadians while contribuitng to a culture of continuous service improvement.",
        "service_type_id": 2,
        "responsibility_area_id": 10,
        "program_id": 59,
        "authority": "Departmental Authority -  originally, OCS was a required component of Service Canada Initiative. ",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 100,
        "name": "Social Security Tribunal",
        "service_id_number": "ESDC-138",
        "description": "The Social Security Tribunal of Canada is an independent administrative body composed of a General Division and an Appeal Division that makes quasi-judicial decisions on appeals related to the Canada Pension Plan (CPP), Old Age Security Act (OAS) and the Employment Insurance Act (EI).",
        "service_type_id": 4,
        "responsibility_area_id": 8,
        "program_id": 60,
        "authority": "Department of Employment and Social Development Act",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 101,
        "name": "Email",
        "service_id_number": "SSC-0001",
        "description": "Email enables individuals working for the Government of Canada to send and receive electronic mail messages and to manage a calendar, tasks, an address book and personal contacts.   ",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 61,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 102,
        "name": "Application Hosting",
        "service_id_number": "SSC-0002",
        "description": "Application Hosting provides partners with a fully managed, secure, reliable and scalable multi-tier platform, including standardized application and database middleware, which allows partners to host and manage their data and business applications. The service provides a standard approach to using these platforms in non-production (development and test), pre-production and production environments, as required by partners’ systems development life cycles.",
        "service_type_id": 11,
        "responsibility_area_id": 12,
        "program_id": 62,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 103,
        "name": "GC WAN",
        "service_id_number": "SSC-0003",
        "description": "GC WAN is a fully managed network service that interconnects partner or client locations across metropolitan, regional, national or international boundaries. This service provides enterprise WAN connectivity for data centres and GC buildings and locations. It interconnects users and computers from national and international locations to each other and the Internet, while supporting business applications for simultaneous voice, data and video communications, as required.",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 61,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 104,
        "name": "Mobile Devices",
        "service_id_number": "SSC-0004",
        "description": "Mobile Device provides cellular phones, smartphones and cellular data devices, along with their service plans. Specialized solutions for emergency-response personnel and senior executives on travel status are also available.",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 63,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 105,
        "name": "Videoconferencing",
        "service_id_number": "SSC-0005",
        "description": "An integrated, standardized service that provides Government of Canada employees the ability to connect video enabled boardrooms and video enabled desktop endpoints between departments on the Government of Canada shared metropolitan network.",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 64,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 106,
        "name": "Contact Centre",
        "service_id_number": "SSC-0006",
        "description": "An integrated, standardized service that provides Government of Canada employees the ability to connect video enabled boardrooms and video enabled desktop endpoints between departments on the Government of Canada shared metropolitan network.",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 64,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 107,
        "name": "High-performance Computing",
        "service_id_number": "SSC-0007",
        "description": "High Performance Computing provides a fully managed platform for extreme performance computing needs, such as intermittent computing or steady-state heavy computing in both research and production environments.",
        "service_type_id": 11,
        "responsibility_area_id": 12,
        "program_id": 65,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 108,
        "name": "Toll-free Voice",
        "service_id_number": "SSC-0008",
        "description": "Toll-Free Voice provides toll-free (1-800) access to Government of Canada (GC) departments and agencies across Canada.",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 63,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 109,
        "name": "Fixed Line (Landline) Phones",
        "service_id_number": "SSC-0009",
        "description": "Fixed Telephony supplies and installs telephone systems, services and devices, including: Voice over IP (VoIP), Centrex, PBX, Key systems.",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 63,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 110,
        "name": "Software Provisioning",
        "service_id_number": "SSC-0010",
        "description": "SSC provides and pays for workplace technology devices (WTD) software for its 43 partner organizations, which have already transferred funds earmarked for WTD software to SSC. Clients (organizations that are not one of SSC's partner departments and agencies) are also required to obtain WTD software from SSC, but will assume the costs. The Software Provisioning Service provides an end-to-end request fulfillment process for WTD software for departmental and agency IT organizations.",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 66,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 111,
        "name": "File",
        "service_id_number": "SSC-0011",
        "description": "SSC File Services for partners currently provides file share services that are centralized, scalable, online storage solutions for unstructured data. It includes root share management, quota management, data migrations, data capacity trending and reporting.  SSC is also working to provide future cloud-based file solutions for partners, which will allow for offline data, and data cross-platform synchronization among devices using a new and efficient way to manage unstructured data.\n",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 67,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 112,
        "name": "Distributed Print",
        "service_id_number": "SSC-0012",
        "description": "Distributed Print provides industry-standard access to printing services for servers within the Government of Canada network.",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 67,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 113,
        "name": "Bulk Print",
        "service_id_number": "SSC-0013",
        "description": "Bulk Print provides standardized and fully managed printing to meet both high-volume and specialized print media requirements. The service offers high-volume distribution and mailing capabilities in secure, centralized printing facilities.",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 67,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 114,
        "name": "Intra-building Network Services",
        "service_id_number": "SSC-0014",
        "description": "Intra-Building Network Services provide Government of Canada partner and client organizations with the interconnection of network segments in building, campus, and data centre environments. These services provide a reliable means of transport for voice, data, and video based applications.",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 68,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 115,
        "name": "Internet",
        "service_id_number": "SSC-0015",
        "description": "Internet (Local Access) provides connectivity for GCNet users to access the Internet and for the public to access Government of Canada websites.",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 69,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 116,
        "name": "Satellite",
        "service_id_number": "SSC-0016",
        "description": "Satellite provides satellite-based telecommunications infrastructure. The offering includes fixed and mobile solutions, as well as national and international options.",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 69,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 117,
        "name": "Teleconferencing (Audio conferencing)",
        "service_id_number": "SSC-0017",
        "description": "Audio Conferencing allows multiple participants to collaborate by telephone anytime, anywhere, with or without operator assistance.",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 63,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 118,
        "name": "Web Conferencing",
        "service_id_number": "SSC-0018",
        "description": "Web conferencing allows users to conduct a conference over the Web. Content from the screen of the meeting host, or from a participant's computer, is displayed on all participants' computers. This includes documents, applications, browsing sessions and live desktop video..",
        "service_type_id": 11,
        "responsibility_area_id": 11,
        "program_id": 64,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 119,
        "name": "myKEY",
        "service_id_number": "SSC-0019",
        "description": "myKEY is an internal credential management (ICM) service that facilitates authentication for secure access to applications and Government of Canada networks. It is used to eliminate potential deniability of transactions using digital signatures and to facilitate the exchange of encrypted email and documents for Protected B information. It is also used for authentication between users, applications and devices (e.g. Compensation Web Applications (CWA) and Government of Canada Secure Remote Access (GCSRA)).",
        "service_type_id": 11,
        "responsibility_area_id": 13,
        "program_id": 70,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 120,
        "name": "External Credential Management",
        "service_id_number": "SSC-0020",
        "description": "Cyber Authentication is an external credential management (ECM) service provided by the Government of Canada to allow the public and businesses to securely conduct online business with various governmental programs and services. Use of this service is mandatory for Government of Canada departments and agencies.",
        "service_type_id": 11,
        "responsibility_area_id": 13,
        "program_id": 70,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 121,
        "name": "Secure Remote Access",
        "service_id_number": "SSC-0021",
        "description": "Government of Canada Secured Remote Access (GCSRA) provides users with the ability to securely transmit and receive information from remote client workstations or remote gateways while maintaining the availability, confidentiality and integrity of the data.",
        "service_type_id": 11,
        "responsibility_area_id": 13,
        "program_id": 71,
        "authority": "Shared Services Canada Act (S.C. 2012, c. 19, s. 711)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 122,
        "name": "Microcomputers",
        "service_id_number": "SSC-022",
        "description": "SSC mandated goods and services for purchase against existing procurement vehicles using a web-hosted electronic store (e-store) called SSC IT Pro. This ordering portal is only to be used by government employees who have the authority from their organization to order the goods and services available on the portal (procurement authorities and certain IT groups).",
        "service_type_id": 11,
        "responsibility_area_id": 14,
        "program_id": 72,
        "authority": "Shared Services Canada Act (Order In Council 2015-1071)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 123,
        "name": "Networking Equipment",
        "service_id_number": "SSC-023",
        "description": "The Networking Equipment service provides access to Network Equipment Support Services (NESS) standing offers (SOs) for the supply, delivery and optional configuration and installation of purchased networking equipment, with associated warranty services, and Network Infrastructure Management Services (NIMS) standing offers (SOs) to procure maintenance services for network hardware, software and licenses.",
        "service_type_id": 11,
        "responsibility_area_id": 14,
        "program_id": 73,
        "authority": "Shared Services Canada Act (Order In Council 2015-1071)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 124,
        "name": "Printing Products",
        "service_id_number": "SSC-024",
        "description": "The Printing Products service provides access to document scanner standing offer (SO) for the supply, delivery, installation and service of document scanners, including accessories and supplies on an \"as and when requested\" basis to locations throughout Canada, excluding comprehensive land claims areas, and Imaging hardware standing offer (SO) to enable Government of Canada departments and agencies to purchase or lease a variety of connected and unconnected digital copying and printing equipment, both monochrome and colour",
        "service_type_id": 11,
        "responsibility_area_id": 15,
        "program_id": 74,
        "authority": "Shared Services Canada Act (Order In Council 2015-1071)",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 125,
        "name": "Temporary Foreign Workers (Overseas  and In- Canada)",
        "service_id_number": "IRCC-1",
        "description": "A written authorization (work permit)  for a foreign national to work temporarily in Canada.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 75,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 126,
        "name": "Temporary Foreign Worker Program:               (1) Work Permit Information Requests; and    (2) Work Permit Revocations",
        "service_id_number": "IRCC-2",
        "description": "Inspecting employers who are exempt from requiring a Labour Market Impact Assessment (LMIA) for compliance with conditions of the International Mobility Program. ",
        "service_type_id": 4,
        "responsibility_area_id": 17,
        "program_id": 75,
        "authority": " IRPA, IRPR, R209 – R209.92",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 127,
        "name": "International Mobility Program: \n(1) Employer Inspections, \n(2) AMPs & Bans, \n(3) LMIA-Exempt Work Permit Revocations",
        "service_id_number": "IRCC-3",
        "description": "Involves inspecting employers who are exempt from requiring a Labour Market Impact Assessment (LMIA) for compliance with conditions of the International Mobility Program.  ",
        "service_type_id": 4,
        "responsibility_area_id": 17,
        "program_id": 75,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 128,
        "name": "Opinion to Employers",
        "service_id_number": "IRCC-4",
        "description": "LMIA exemption written \"opinions\" is provided upon request to employers and\/or their authorized representatives who are seeking to employ  visa-exempt foreign workers who they believe may be exempted from obtaining a work permit and\/or a Labor Market Impact Assessment from Service Canada. ",
        "service_type_id": 2,
        "responsibility_area_id": 16,
        "program_id": 75,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 129,
        "name": "Electronic Travel Authorization (eTA)",
        "service_id_number": "IRCC-5",
        "description": "The eTA is an entry requirements for visa-exempt, non-U.S. foreign nationals travelling to Canada by air linked to a client's passport. ",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 76,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 130,
        "name": "Temporary Resident Visa (TRV)\n(Overseas & In-Canada (new or extension)",
        "service_id_number": "IRCC-6",
        "description": "A Temporary Resident Visa (TRV)  is a counterfoil issued in a passport or travel document by an IRCC officer to allow for travel to Canada. The holder of a TRV is a person who, in an officer’s opinion, meets the requirements of the Immigration and Refugee Protection Act and Regulations [A22, R179] and may become a temporary resident upon admission to Canada.\n",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 76,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 131,
        "name": "Visitor Record (VR) (In-Canada)",
        "service_id_number": "IRCC-7",
        "description": "A visitor record  is issued to a foreign national within Canada as a means to exercise an element of control over the length of stay.  If an officer believes that a foreign national's length of stay should be limited to a period of less than six months, or extended past  a period of six months, a visitor record  should be issued.  ",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 76,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 132,
        "name": "Restoration of status",
        "service_id_number": "IRCC-8",
        "description": "If a visitor, worker or student has remained past their period of authorized stay, they may apply to reinstate or restore their status, so long as they have not been out of status for more than 90 days, and they have not failed to comply with the specified conditions.\n\n",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 76,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 133,
        "name": "Temporary Resident Permit (TRP)\n(In-Canada (new or extension))",
        "service_id_number": "IRCC-9",
        "description": "A TRP is a discretionary document that may be issued to inadmissible persons or persons reported or who may be reported for violation of the Immigration and Refugee Protection Act to allow them to enter or remain in Canada as a temporary resident, where justified by exceptional circumstances.\n",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 76,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 134,
        "name": "Temporary Resident Permit (TRP) for Victims of Human Trafficking",
        "service_id_number": "IRCC-10",
        "description": "A TRP is issued to inadmissible foreign nationals when it is deemed that the person's need to enter Canada outweighs the risk. ",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 76,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 135,
        "name": "Study Permit (Overseas & In-Canada, \nnew or extension)",
        "service_id_number": "IRCC-11",
        "description": "IRCC issues foreign nationals who have met all eligibility and admissibility requirements a written authorization to be able to study in Canada.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 77,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 136,
        "name": "International Experience Canada Permit",
        "service_id_number": "IRCC-12",
        "description": "Foreign nationals , aged 18-35, are issued a Letter of Introduction (LOI) which enables them to obtain a work permit to travel and work in Canada based on Canada’s youth mobility arrangements and agreements with specific countries and participating organizations.",
        "service_type_id": 4,
        "responsibility_area_id": 18,
        "program_id": 78,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 137,
        "name": "Federal Skilled Worker",
        "service_id_number": "IRCC-13",
        "description": "PR for skilled workers on the basis of their ability to become economically established in Canada and their intention to reside in a province other than the province of Quebec. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 79,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 138,
        "name": "Federal Skilled Trades",
        "service_id_number": "IRCC-14",
        "description": "PR for skilled workers on the basis of their ability to become economically established in Canada and their intention to reside in a province other than the province of Quebec. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 80,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 139,
        "name": "Canadian Experience Class",
        "service_id_number": "IRCC-15",
        "description": "PR for individuals on  the basis of their ability to become economically established in Canada, their qualifying Canadian work experience, and their intention to reside in a province other than the province of Quebec. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 81,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 140,
        "name": "Start up visa",
        "service_id_number": "IRCC-16",
        "description": "PR for individuals who are innovative business persons and  Angel Investor Group, or Business Incubator. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 82,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 141,
        "name": "Immigrant Investor Venture Capital (IIVC)",
        "service_id_number": "IRCC-17",
        "description": "PR for individuals who have met the requirements of the Immigrant Investor Venture Capital Pilot program. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 82,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 142,
        "name": "Federal Self employed",
        "service_id_number": "IRCC-18",
        "description": "PR for individuals who will be self-employed in Canada and have relevant experience in cultural activities, athletics, or farm management. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 82,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 143,
        "name": "Live In Caregivers",
        "service_id_number": "IRCC-19",
        "description": "PR for individuals who have met the requirements of the live in caregiver program. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 83,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 144,
        "name": "Caring for Children or for People with High Medical Needs",
        "service_id_number": "IRCC-20",
        "description": "PR for individuals who have met the requirements of  caring for children or caring for people with high medical needs class. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 83,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 145,
        "name": "Quebec Skilled Workers\/Trades",
        "service_id_number": "IRCC-21",
        "description": "PR for individuals selected by the province of Quebec on the basis of their ability to become economically established in Canada and reside in the province of Quebec. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 84,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 146,
        "name": "Quebec Business (Entrepreneur, Investor, Self-employed)",
        "service_id_number": "IRCC-22",
        "description": "PR for individuals selected by the province of Quebec on the basis of their ability to become economically established in Canada through business activities and reside in the province of Quebec. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 85,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 147,
        "name": "Provincial Nominees",
        "service_id_number": "IRCC-23",
        "description": "PR for individuals who are nominated by a province or territory on the basis of their ability to become economically established in Canada in the province or territory of nomination except for the province of Quebec. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 86,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 148,
        "name": "Family Class Priority (FCP) (Overseas and In- Canada)",
        "service_id_number": "IRCC-24",
        "description": "Sponsorship for PR for a spouse, common-law partner, conjugal partner and dependent children (including adopted children) of Canadians or permanent residents. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 87,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 149,
        "name": "Parents and Grandparents (FC4)",
        "service_id_number": "IRCC-25",
        "description": "Sponsorship for PR for Parents and Grandparents of Canadians or permanent residents. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 88,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 150,
        "name": "Other Relatives",
        "service_id_number": "IRCC-26",
        "description": "Sponsorship for PR for orphaned relatives under 18; or for one other qualified relative of a Canadian citizen or permanent resident. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 89,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 151,
        "name": "Spouse or common-law partner in Canada class",
        "service_id_number": "IRCC-27",
        "description": "Sponsorship for PR for a spouse or common-law partner residing in Canada of a Canadian citizen or permanent resident including those who have fallen out of status In Canada. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 87,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 152,
        "name": "TRP Holder",
        "service_id_number": "IRCC-28",
        "description": "PR application class for TRP holders who meet eligibility criteria related to the period for which they have lived in Canada with a TRP. This service includes granting permanent residence and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 90,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 153,
        "name": "Humanitarian & Compassionate",
        "service_id_number": "IRCC-29",
        "description": "PR for an individual granted based on humanitarian and compassionate consideration. This service includes actual landing in Canada and issuance of PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 90,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 154,
        "name": "Resettled Refugees",
        "service_id_number": "IRCC-30",
        "description": "Resettlement of refugees identified through the UNHCR or other referral agencies, private individuals\/ organizations or groups of individuals and supported\/sponsored  by one of the following: the government of Canada or Quebec, private individuals\/ organizations, groups of individuals, or Sponsorship Agreement Holders (SAHs).",
        "service_type_id": 4,
        "responsibility_area_id": 19,
        "program_id": 91,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 155,
        "name": "Humanitarian Public Policy",
        "service_id_number": "IRCC-31",
        "description": "Priority processing of resettlement applications for persons who meet the definition of Convention Refugee or are in refugee-like situations.",
        "service_type_id": 4,
        "responsibility_area_id": 20,
        "program_id": 90,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 156,
        "name": "Protected Person & Dependants (APR)",
        "service_id_number": "IRCC-32",
        "description": "PR status granted to protected persons in-Canada and to their dependants both in Canada and overseas.",
        "service_type_id": 4,
        "responsibility_area_id": 21,
        "program_id": 92,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 157,
        "name": "In-Canada Asylum",
        "service_id_number": "IRCC-33",
        "description": "IRCC receives applications for refugee protection and assess eligibility.  If approved, the claim is referred to the IRB for decision.",
        "service_type_id": 4,
        "responsibility_area_id": 21,
        "program_id": 93,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 158,
        "name": "Immigration Loan",
        "service_id_number": "IRCC-34",
        "description": "This statutory program ensures that some persons, otherwise unable to pay for the costs of transportation to Canada and medical admissibility exams, have access to a funding source. The main target group for the program are resettled refugees but  loans may also be approved for foreign nationals to defray the Right of Permanent Residence Fee and to newcomers in need to cover initial settlement expenses.  The interest-bearing loans are repayable in full and payment plans vary by the value of the loan.  Deferrals and extensions are available in some instances.",
        "service_type_id": 1,
        "responsibility_area_id": 22,
        "program_id": 94,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 159,
        "name": "One year window for APR",
        "service_id_number": "IRCC-35",
        "description": "Refugees with PR status who have dependants whose whereabouts were unknown at the time of landing may submit an APR for their dependants, if located, within one year of the date of landing of the refugee in Canada.",
        "service_type_id": 4,
        "responsibility_area_id": 20,
        "program_id": 92,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 160,
        "name": "Pre-removal Risk Assessment",
        "service_id_number": "IRCC-36",
        "description": "Make an assessment that persons being removed from Canada in accordance with IRPA and its Regulations are not sent to a country where they would be in danger or at risk of persecution.",
        "service_type_id": 4,
        "responsibility_area_id": 21,
        "program_id": 95,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 161,
        "name": "The Issuance of Danger Opinion",
        "service_id_number": "IRCC-37",
        "description": "Protect the health and safety of Canadians,  maintain the security of Canadian society, and promote international justice and security by denying access to Canadian territory to persons, including refugees, who are security risks or serious criminals. ",
        "service_type_id": 4,
        "responsibility_area_id": 23,
        "program_id": 96,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 162,
        "name": "Settlement Transfer Payments",
        "service_id_number": "IRCC-38",
        "description": "IRCC provides funds to organizations in support of the delivery of the Settlement programs ($578,437,254 In 2015-2016)  Contribution agreements are the main mechanism for funding the delivery of services to newcomers. Services include language training, community and employment bridging, and settlement information, and support services that that facilitate access to settlement programming.",
        "service_type_id": 1,
        "responsibility_area_id": 24,
        "program_id": 97,
        "authority": "Program Ts&Cs",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 163,
        "name": "Federal Internship for Newcomers (FIN) Program",
        "service_id_number": "IRCC-39",
        "description": "Provides skilled immigrants Canadian work experience by matching their skills with employers in both the government and private institutions.  ",
        "service_type_id": null,
        "responsibility_area_id": 25,
        "program_id": 98,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 164,
        "name": "PR Card Renewals & Replacements",
        "service_id_number": "IRCC-40",
        "description": "Issuance of PR cards to those whose PR cards' validity  have expired or  replace those  whose PR cards are lost\/stolen.",
        "service_type_id": 4,
        "responsibility_area_id": 26,
        "program_id": 99,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 165,
        "name": "Permanent Resident Travel Document",
        "service_id_number": "IRCC-41",
        "description": "Issuance of Permanent Resident Travel Document to persons abroad whose PR card has expired, are not in possession of a PR card or have  a lost\/stolen PR card.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 100,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 166,
        "name": "Resettlement Assistance (RAP) Transfer Payments: Contributions",
        "service_id_number": "IRCC-42",
        "description": "Provides funds for immediate and essential RAP services through contributions to service providing organizations in all provinces in Canada except Quebec (including port of entry services, assistance with temporary accommodation life skills and orientation training, and links to settlement programming).\n\n",
        "service_type_id": 1,
        "responsibility_area_id": 27,
        "program_id": 101,
        "authority": "Program Ts&Cs",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 167,
        "name": "Resettlement Assistance (RAP) Transfer Payments: Income Support",
        "service_id_number": "IRCC-43",
        "description": "Direct financial support and immediate and essential services to RAP clients including government-assisted refugees, privately sponsored refugees in blended initiatives under the BVOR program, and persons in refugee-like situations admitted to Canada.",
        "service_type_id": 1,
        "responsibility_area_id": 27,
        "program_id": 101,
        "authority": "Program Ts&Cs",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 168,
        "name": "Reimbursement Interim Federal Health (IFH)",
        "service_id_number": "IRCC-44",
        "description": "Health Care Professionals are reimbursed for providing eligible services to clients.",
        "service_type_id": 1,
        "responsibility_area_id": 28,
        "program_id": 102,
        "authority": "Interim Federal Health Program Policy",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 169,
        "name": "Eligibility Certificate for IFH",
        "service_id_number": "IRCC-45",
        "description": "Renewal of Eligibility Certificate for IFH.",
        "service_type_id": 4,
        "responsibility_area_id": 28,
        "program_id": 102,
        "authority": "Interim Federal Health Program Policy",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 170,
        "name": "Medical Surveillance Notification",
        "service_id_number": "IRCC-46",
        "description": "Migrants who pose Public Health Risks are referred to PTs for medical surveillance.   ",
        "service_type_id": 4,
        "responsibility_area_id": 28,
        "program_id": 103,
        "authority": "IRPA, IRPR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 171,
        "name": "Grant 5(1), 5(2)",
        "service_id_number": "IRCC-47",
        "description": "Granting of citizenship to  adults and\/or minor applicants who have either met all the requirements to become naturalized citizens or have been granted per the discretion of the IRCC Minister. ",
        "service_type_id": 4,
        "responsibility_area_id": 29,
        "program_id": 104,
        "authority": "CA, Citizenship Regulations ",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 172,
        "name": "Stateless grant 5(5)",
        "service_id_number": "IRCC-48",
        "description": "Granting of citizenship to  an individual who is and always was stateless and was born outside Canada to a Canadian parent.",
        "service_type_id": 4,
        "responsibility_area_id": 29,
        "program_id": 104,
        "authority": "CA, Citizenship Regulations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 173,
        "name": "Adoption 5.1",
        "service_id_number": "IRCC-49",
        "description": "Citizenship granted to an individual adopted by a Canadian Citizen.",
        "service_type_id": 4,
        "responsibility_area_id": 30,
        "program_id": 104,
        "authority": "CA, Citizenship Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 174,
        "name": "Resumption 11(1) & 11(2)",
        "service_id_number": "IRCC-50",
        "description": "Citizenship  granted to any person who was previously a Canadian citizen, whose citizenship was not revoked under the former or present Act, and who have met all the requirements to resume citizenship.",
        "service_type_id": 4,
        "responsibility_area_id": 29,
        "program_id": 104,
        "authority": "CA, Citizenship Regulations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 175,
        "name": "Revocation",
        "service_id_number": "IRCC-51",
        "description": "Revocation of citizenship for misrepresentation, fraud, knowingly concealing material circumstances, terrorism, high treason, treason, spying offences and\/or serving as a member of an armed force of a country or as a member of an organized armed group and that country or group is engaged In armed conflict with Canada. ",
        "service_type_id": 4,
        "responsibility_area_id": 31,
        "program_id": 104,
        "authority": "CA, Citizenship Regulations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 176,
        "name": "Renunciation of Citizenship",
        "service_id_number": "IRCC-52",
        "description": "Renunciation for Canadian citizenship under section 9(1) of the Citizenship Act and the streamlined renunciation under section 7.1 of the Citizenship Regulations for certain individuals who had Canadian citizenship. ",
        "service_type_id": 4,
        "responsibility_area_id": 29,
        "program_id": 104,
        "authority": "CA, Citizenship Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 177,
        "name": "Proof of Citizenship",
        "service_id_number": "IRCC-53",
        "description": "Issuance of proof of citizenship for travel and government services. ",
        "service_type_id": 4,
        "responsibility_area_id": 32,
        "program_id": 104,
        "authority": "CA, Citizenship Regulations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 178,
        "name": "Recalls of Citizenship Certificate(s)",
        "service_id_number": "IRCC-54",
        "description": "A certificate of citizenship is recalled when it was issued in error or if the Registrar is of the opinion that the person to whom it was issued is not entitled to it.",
        "service_type_id": 4,
        "responsibility_area_id": 33,
        "program_id": 104,
        "authority": "CA, Citizenship Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 179,
        "name": "Search of Records",
        "service_id_number": "IRCC-55",
        "description": "Provides record of citizenship to requests by individuals, P\/T business and other organizations.   ",
        "service_type_id": 4,
        "responsibility_area_id": 34,
        "program_id": 104,
        "authority": "CA, Citizenship Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 180,
        "name": "Citizenship Education &  Outreach \nReaffirmation",
        "service_id_number": "IRCC-56",
        "description": "Promote awareness of rights and responsibilities of a citizenship; including reaffirmation ceremonies. ",
        "service_type_id": null,
        "responsibility_area_id": 35,
        "program_id": 105,
        "authority": "Policy",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 181,
        "name": "Regular Passport",
        "service_id_number": "IRCC-57",
        "description": "Issuance of regular passports.",
        "service_type_id": 4,
        "responsibility_area_id": 36,
        "program_id": 106,
        "authority": "CPO\nPOTDSFR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 182,
        "name": "Diplomatic Passport",
        "service_id_number": "IRCC-58",
        "description": "Issuance of diplomatic passport to diplomats and their dependents.",
        "service_type_id": 4,
        "responsibility_area_id": 37,
        "program_id": 106,
        "authority": "DSPO\nPOTDSFR",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 183,
        "name": "Special Passport",
        "service_id_number": "IRCC-59",
        "description": "Issuance of official passport to military and other government officials and their dependents traveling a status other than diplomatic.",
        "service_type_id": 4,
        "responsibility_area_id": 37,
        "program_id": 106,
        "authority": "DSPO\nPOTDSFR",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 184,
        "name": "Certificate of Identity",
        "service_id_number": "IRCC-60",
        "description": "Issuance of travel documents to Permanent Residents in Canada who are stateless or otherwise unable to obtain a passport from the country of origin.",
        "service_type_id": 4,
        "responsibility_area_id": 37,
        "program_id": 106,
        "authority": "Royal prerogative, POTDSFR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 185,
        "name": "Refugee Travel Document",
        "service_id_number": "IRCC-61",
        "description": "Issuance of travel documents to convention refugees.",
        "service_type_id": 4,
        "responsibility_area_id": 37,
        "program_id": 106,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 186,
        "name": "Emergency travel document",
        "service_id_number": "IRCC-62",
        "description": "Issuance of single journey  travel document to Canadians abroad for urgent return to Canada or closest destination where passport services can be obtained.",
        "service_type_id": 4,
        "responsibility_area_id": 38,
        "program_id": 106,
        "authority": "CPO\nPOTDSFR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 187,
        "name": "Visa facilitation for Official Travel",
        "service_id_number": "IRCC-63",
        "description": "Facilitation of visa services for bearers of official (special and diplomatic) passports for their official travel.",
        "service_type_id": 4,
        "responsibility_area_id": 37,
        "program_id": 106,
        "authority": "N\/A",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 188,
        "name": "Addition of a special stamp in a  \npassport or other travel document",
        "service_id_number": "IRCC-64",
        "description": " Translation of names of biodata fields to Arabic to enable passport holder to travel to Arabic speaking country. ",
        "service_type_id": 4,
        "responsibility_area_id": 39,
        "program_id": 106,
        "authority": "POTDSFR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 189,
        "name": "Addition of an observation in a   \npassport or other travel document",
        "service_id_number": "IRCC-65",
        "description": "Addition of text printed on a label and inserted in the travel document to add information; specify limitations; and\/or alert border authorities to particular facts relevant to the conditions of issuance or use in certain circumstances.",
        "service_type_id": 4,
        "responsibility_area_id": 40,
        "program_id": 106,
        "authority": "POTDSFR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 190,
        "name": "Certifying true copies of part of a \npassport or another travel document",
        "service_id_number": "IRCC-66",
        "description": "Issuance of a document certifying the passport is authentic. ",
        "service_type_id": 4,
        "responsibility_area_id": 39,
        "program_id": 106,
        "authority": "POTDSFR",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 191,
        "name": "Verification of Status",
        "service_id_number": "IRCC-67",
        "description": "Provides Verification of Status document containing  information that appeared on the  original Record of Landing, Confirmation of Permanent Residence, Work Permit, Study Permit or other immigration documents. ",
        "service_type_id": 4,
        "responsibility_area_id": 41,
        "program_id": 99,
        "authority": "Policy",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 192,
        "name": "Amendments to historical records or replacement of valid TR documents",
        "service_id_number": "IRCC-68",
        "description": "Amends errors made by Canadian immigration officials on the Record of Landing, Confirmation of Permanent Resident document, or valid Temporary Resident documents.",
        "service_type_id": 4,
        "responsibility_area_id": 16,
        "program_id": 99,
        "authority": "Policy",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 193,
        "name": "Determination of Rehabilitation for criminality or serious criminality",
        "service_id_number": "IRCC-69",
        "description": "Make a determination of whether a client meets the rehabilitation or deemed rehabilitated criteria per IRPA A36(3). ",
        "service_type_id": 4,
        "responsibility_area_id": 42,
        "program_id": 99,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 194,
        "name": "Renunciation of Permanent Residency",
        "service_id_number": "IRCC-70",
        "description": "Renunciation of Permanent Resident Status under section 46(1)(e) of IRPA and the streamlining renunciation under section 72.6 of the IRPR for certain individuals who had permanent resident status. ",
        "service_type_id": 4,
        "responsibility_area_id": 42,
        "program_id": 107,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 195,
        "name": "Authorization to return to Canada",
        "service_id_number": "IRCC-71",
        "description": "Provides authorization to an individual previously removed from Canada to return to Canada.",
        "service_type_id": 4,
        "responsibility_area_id": 42,
        "program_id": 99,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 196,
        "name": "IRCC Web Validation Portal - Internal (GOC) and External (Provinces\/Territories)",
        "service_id_number": "IRCC-72",
        "description": "Web-based system that enables federal\/provincial\/territorial partners to validate the status of an individual's non-secure documents.",
        "service_type_id": 2,
        "responsibility_area_id": 43,
        "program_id": 100,
        "authority": "SLAs \/ MOUs",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 197,
        "name": "Biographic  (US) and Biometric (US  & FCC) Information Sharing",
        "service_id_number": "IRCC-73",
        "description": "Shares biographic (US only) and  biometric information of foreign nationals with the United States and other FCC partners for the purpose of obtaining immigration information on shared clients.",
        "service_type_id": 2,
        "responsibility_area_id": 44,
        "program_id": 96,
        "authority": "IIST and the Asylum Annex to the SMU;High Value Data Sharing Protocol",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 198,
        "name": "Global Assistance to Irregular Migrants  \n  (GAIM)",
        "service_id_number": "IRCC-74",
        "description": "The program provides transfer payments in the form of contributions to trusted international, Intergovernmental, and non-governmental organizations (such as the International Organization for Migration). The program assists illegal migrants in returning to their home country of origin by providing basic needs and medical support to stranded irregular migrants, assisting in the reintegration of returned individuals, supporting capacity building activities for governments of transit states, delivering information and awareness activities in countries of origin, and conducting research in support of the program.",
        "service_type_id": 1,
        "responsibility_area_id": 45,
        "program_id": 108,
        "authority": "Program Ts&Cs",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 199,
        "name": "Access to Information",
        "service_id_number": "IRCC-75",
        "description": "Provides personal information as requested by individuals\/ institutions. ",
        "service_type_id": 2,
        "responsibility_area_id": 46,
        "program_id": 109,
        "authority": "ATI Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 200,
        "name": "Privacy",
        "service_id_number": "IRCC-76",
        "description": "Provides  individuals the right to access and request correction of personal information about themselves.",
        "service_type_id": 2,
        "responsibility_area_id": 46,
        "program_id": 109,
        "authority": "Privacy Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 201,
        "name": "Immigration Representatives Query \nService",
        "service_id_number": "IRCC-77",
        "description": "The Immigration Representatives mailbox responds to general immigration programs and policy related inquiries by authorized representatives.",
        "service_type_id": 2,
        "responsibility_area_id": 16,
        "program_id": 110,
        "authority": "IRPA, IRPR",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 202,
        "name": "Merger review - Competition Law Enforcement",
        "service_id_number": "ISED-1",
        "description": "Under the Competition Act, mergers of all sizes and in all sectors of the economy are subject to review by the Commissioner of Competition to determine whether they will likely result in a substantial lessening or prevention of competition. The Commissioner of Competition must be notified of all mergers that exceed certain size thresholds prior to completion. Failure to notify is a criminal offence.\n",
        "service_type_id": 4,
        "responsibility_area_id": 47,
        "program_id": 111,
        "authority": "Part IX (Notifiable Transactions) of the Competition Act ",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 203,
        "name": "Information Centre - Law enforcement",
        "service_id_number": "ISED-2",
        "description": "The Information Centre is responsible for providing information on the laws under the Competition Bureau's jurisdiction and for capturing complaints that may lead to formal investigations.",
        "service_type_id": 2,
        "responsibility_area_id": 47,
        "program_id": 111,
        "authority": "No legislation for this service",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 204,
        "name": "CA Identification Number Application and updates",
        "service_id_number": "ISED-3",
        "description": "A CA Identification Number is issued by the Competition Bureau upon request. Only Canadian manufacturers, processors or finishers of a textile fibre product or Canadians engaged in the business of importing or selling any textile fibre product are allowed to register for a CA Identification Number. Such dealers are not required to have a CA Identification Number but they may use it in place of their name and address on the label of consumer textile articles.\n",
        "service_type_id": 4,
        "responsibility_area_id": 47,
        "program_id": 111,
        "authority": "The Textile Labelling Act and Textile Labelling and Advertising Regulations ",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 205,
        "name": "Written Opinions",
        "service_id_number": "ISED-4",
        "description": "The Commissioner has the discretion, on request from any person, to provide a binding written opinion on the applicability of one or more provisions of the Competition Act or regulations to a proposed practice or conduct. Written Opinions are binding on the Commissioner if all the material facts have been submitted, are accurate, and remain substantially unchanged. The Commissioner has the sole discretion to decline to issue a Written Opinion.\n",
        "service_type_id": 2,
        "responsibility_area_id": 47,
        "program_id": 111,
        "authority": "Section 124.1 of the Competition Act",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 206,
        "name": "Grant patents rights",
        "service_id_number": "ISED-5",
        "description": "Grant patent rights in accordance with the legislative IP framework",
        "service_type_id": 5,
        "responsibility_area_id": 48,
        "program_id": 112,
        "authority": "Patent Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 207,
        "name": "Register trademark rights",
        "service_id_number": "ISED-6",
        "description": "Register trademark rights in accordance with the IP legislative framework",
        "service_type_id": 5,
        "responsibility_area_id": 48,
        "program_id": 112,
        "authority": "Trademarks Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 208,
        "name": "Register copyrights",
        "service_id_number": "ISED-7",
        "description": "Register copyrights in accordance with the IP legislative framework",
        "service_type_id": 5,
        "responsibility_area_id": 48,
        "program_id": 112,
        "authority": "Copyright Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 209,
        "name": "Register industrial designs",
        "service_id_number": "ISED-8",
        "description": "Register industrial design rights in accordance with the IP legislative framework",
        "service_type_id": 5,
        "responsibility_area_id": 48,
        "program_id": 112,
        "authority": "Industrial Design Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 210,
        "name": "Web Services Centre",
        "service_id_number": "ISED-9",
        "description": "As part of its services, CMB provides corporate contact centre services to citizens and the international community in support of ISED programs and services advertised via www.ic.gc.ca. The centre can be reached through a series of channels Monday to Friday, 8:30 a.m. to 5:00 p.m. (Eastern Standard Time). \n\nToll Free: 1-800-328-6189 \nVoicemail: 1-800-328-6189\nFax: (613) 954-2340 \nTTY: 1-866-694-8389\nInternet: www.ic.gc.ca\nEmail: info@ic.gc.ca\nChat: www.ic.gc.ca\/chat\nMail:  ISED Web Services Centre\n C.D. Howe Building\n 235 Queen Street\n Ottawa, ON, K1A 0H5\n\nThe centre also supports the ISED Employees Information Line, a service to assist employees in locating important information and contact to do their work more effectively.\n\n1. GENERAL ENQUIRIES \nContact centre agents assist external website users of www.ic.gc.ca in many ways including: \n• Navigating and locating information on related topics \n• Completing online forms and transactions\n• Assisting clients with publication and copyright requests\n• Connecting clients with the right Industry Canada experts \n\nThe contact centre strives to provide website visitors services that meet their expectations.  Agents are committed to:\n• Attend clients with an unsurpassed level of service and professionalism \n• Deliver accurate and reliable information and solutions that meets client needs\n• Improve service and web products through client suggestions and feedback \n\nOur goal is to provide the public with accurate information as quickly as possible. You can support us by keeping your web content as complete and up to date.\n\n2. ENQUIRY METRICS\nBecause we interact with your clients every day the contact centre is a perfect place to start should you be looking at ways to improve your website.  The centre is able to provide advice based on the user experience and support its recommendations through sound enquiry metrics specific to your web content.\n\n3. QUALITY ASSURANCE\nMeasuring client satisfaction and ensuring the quality of your service is the responsibility of every service owner. The contact centre can help you meet your quality and client service objectives by:\n• Providing your organisation mystery caller services \n• Establishing service standards and best practices for your centre\n• Setting performance indicators and benchmarks \n• Developing the right tools to measure quality and service over time\n\n4. IC EMPLOYEE INFORMATION LINE\nHave you ever had difficulty finding an ISED expert or general information related to a specific topic such as procurement, HR or communications?  The ISED Employee Information Line may be the answer to save you time and improve your success by:\n• Navigating the ISED Web for relevant information\n• Locating general information on various topics\n• Connecting you to the right ISED expert",
        "service_type_id": 2,
        "responsibility_area_id": 49,
        "program_id": 113,
        "authority": "Communications Policy of the Government of Canada",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 211,
        "name": "Automotive Supplier Innovation Program",
        "service_id_number": "ISED-10",
        "description": "The Automotive Supplier Innovation Program helps Canadian automotive suppliers gain a competitive edge through new innovative products and processes. The program will help research and development projects to become commercially viable by supporting product development and technology demonstration on a cost-shared basis with participating firms.\n\nThe Automotive Supplier Innovation Program is a complement existing initiatives supporting the automotive sector, such as the Automotive Innovation Fund, by strengthening Canada's parts supply base and creating a favourable environment for automotive research and development, while providing firms with new opportunities to enter global supply chains.  ASIP was launched in 2015.",
        "service_type_id": 1,
        "responsibility_area_id": 50,
        "program_id": 114,
        "authority": "Industry Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 212,
        "name": "Automotive Innovation Fund",
        "service_id_number": "ISED-11",
        "description": "The Automotive Innovation Fund (AIF), supports automotive firms' strategic, large-scale research and development (R&D) projects to build innovative, greener, more fuel-efficient vehicles.",
        "service_type_id": 1,
        "responsibility_area_id": 50,
        "program_id": 114,
        "authority": "Industry Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 213,
        "name": "Strategic Aerospace and Defence Initiative (SADI)",
        "service_id_number": "ISED-12",
        "description": "SADI provides repayable contributions to support research and development (R&D) projects in the aerospace, space, defence and security (A&D) sectors. SADI is available to firms of all sizes to support product, service or process innovation.",
        "service_type_id": 1,
        "responsibility_area_id": 51,
        "program_id": 115,
        "authority": "Sections 4(1)(a), 5(c), 5(d), 6(c), and 14(1)(c)of the Department of Industry Act, S.C. 1995, c.1; Review of Aerospace and Space Program and Policies cabinet approval on May 28, 2013; Economic Action Plan 2013 ",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 214,
        "name": "Technology Demonstration Program (TDP)",
        "service_id_number": "ISED-13",
        "description": "TDP provides non-repayable contributions to support large scale technology demonstration projects  in the aerospace, space, defence and security (A&D) sectors. TDP is available to OEMs or Tier 1 corporations.",
        "service_type_id": 1,
        "responsibility_area_id": 51,
        "program_id": 115,
        "authority": "Sections 4(1)(a), 5(c), 5(d), 6(c), and 14(1)(c)of the Department of Industry Act, S.C. 1995, c.1; Review of Aerospace and Space Program and Policies cabinet approval on May 28, 2013; Budget 2013 ",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 215,
        "name": "Canada Business Network",
        "service_id_number": "ISED-14",
        "description": "One stop access to information and resources to help small businesses grow and prosper.",
        "service_type_id": 2,
        "responsibility_area_id": 52,
        "program_id": 116,
        "authority": "No legislation for this service.",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 216,
        "name": "BizPaL",
        "service_id_number": "ISED-15",
        "description": "BizPaL is an online service that provides entrepreneurs with tailored information on the permits and licences they need to start and operate their business as a standalone website and as a web service that is used on over 400 websites that serve small businesses and entrepreneurs.",
        "service_type_id": 2,
        "responsibility_area_id": 52,
        "program_id": 116,
        "authority": "No legislation for this service.",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 217,
        "name": "Process annual return, change of directors and registered office  - CBCA\/NFP Act Federal Corporations",
        "service_id_number": "ISED-16",
        "description": "Business corporations and not-for-profit organizations are required to submit annual filings with CC.",
        "service_type_id": 4,
        "responsibility_area_id": 52,
        "program_id": 117,
        "authority": "CBCA and \nNFP Act \nFederal Corporations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 218,
        "name": "Review Arrangements and Exemptions - CBCA\/NFP Act Federal Corporations",
        "service_id_number": "ISED-17",
        "description": "CC review the court applications to ensure that the interests of other interested parties are considered and that the principles underlying the CBCA are respected.  Exemptions are reviewed to ensure that competing interests are balanced and that the principles underlying the CBCA are respected.\n",
        "service_type_id": 4,
        "responsibility_area_id": 52,
        "program_id": 117,
        "authority": "CBCA and \nNFP Act \nFederal Corporations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 219,
        "name": "Provide compliance  and existence certificates - CBCA\/NFP Act Federal Corporations",
        "service_id_number": "ISED-18",
        "description": "CC processes certificate of compliance that certifies, on the date of the request,  a particular federal corporation exist, has filed an annual return and has paid the required fees. A certificate of existence certifies that the corporation: exists as of the date the request is submitted, existed on a specific date OR existed during a specific period.  CC also copies of documents under all acts it administered.\n ",
        "service_type_id": 4,
        "responsibility_area_id": 52,
        "program_id": 117,
        "authority": "CBCA and \nNFP Act \nFederal Corporations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 220,
        "name": "Issue certificates of incorporations, amendment and dissolution (NFP and CBCA)",
        "service_id_number": "ISED-19",
        "description": "CC processes applications and issue certificates for business corporations and Not-for-Profit organizations in Canada",
        "service_type_id": 4,
        "responsibility_area_id": 52,
        "program_id": 117,
        "authority": "CBCA and \nNFP Act \n",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 221,
        "name": "Measuring Device Prototype Approvals",
        "service_id_number": "ISED-20",
        "description": "All prototype measuring devices (e.g., gas pumps, scales, electricity meters, natural gas meters) intended for use in measurement-based financial transactions (trade measurement) must be evaluated and approved by Measurement Canada before they can be used in the Canadian marketplace. Measurement Canada issues a type approval once it has been confirmed the device complies with all applicable legal requirements.  This type approval is legal confirmation the device is approved for trade measurement use in Canada. ",
        "service_type_id": 4,
        "responsibility_area_id": 52,
        "program_id": 118,
        "authority": "Weights and Measures Act and Regulations\nElectricity and Gas Inspection Act and Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 222,
        "name": "Complaint Investigation of Suspected Inaccurate Measurement",
        "service_id_number": "ISED-21",
        "description": "Measurement Canada investigation of consumer and business complaints of suspected inaccurate measurement involving scales, gas pumps, electricity and natural gas meters, and other measuring devices, and some types of packaged products.",
        "service_type_id": 4,
        "responsibility_area_id": 52,
        "program_id": 118,
        "authority": "Weights and Measures Act and Regulations\nElectricity and Gas Inspection Act and Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 223,
        "name": "Authorized Service Provider Renewal",
        "service_id_number": "ISED-22",
        "description": "Measurement Canada grants organizations who comply with ISO-based criteria the authority to test and certify measuring devices in accordance with legislative requirements.  Once accreditation status is granted,  an annual renewal license fee is charged for authorized service providers who continue to comply with program criteria. ",
        "service_type_id": 4,
        "responsibility_area_id": 52,
        "program_id": 118,
        "authority": "Weights and Measures Act and Regulations\nElectricity and Gas Inspection Act and Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 224,
        "name": "Bankruptcy and Insolvency Records Search",
        "service_id_number": "ISED-23",
        "description": "The Bankruptcy and Insolvency Records Search database can be queried online or through the ''Name search'' service center by any stakeholder and the general public. The database contains:\n•basic debtor information of all bankruptcies and proposals registered in Canada since 1978\n•all receiverships registered with our office since January 1993\n•all petitions recorded at our office; and\n•all companies that have been granted protection under the Companies´ Creditors Arrangement Act (CCAA) since September 18, 2009.\n",
        "service_type_id": 4,
        "responsibility_area_id": 52,
        "program_id": 119,
        "authority": "Bankruptcy and Insolvency Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 225,
        "name": "Trustee Licence Renewal.",
        "service_id_number": "ISED-24",
        "description": "The Superintendent of Bankruptcy has the authority, under the Bankruptcy and Insolvency Act (BIA), to grant licences to Licensed Insolvency Trustees.                                                      Directive No. 13R6, Trustee Licensing.  Each Year, the OSB will send an invoice to all licenced trustee for the ''renewal'' period and trustees must access the online payment system to pay their fees prior to December 31st. ",
        "service_type_id": 4,
        "responsibility_area_id": 52,
        "program_id": 119,
        "authority": "Bankruptcy and Insolvency Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 226,
        "name": "Contributions Program for Non-Profit and Voluntary Organizations",
        "service_id_number": "ISED-25",
        "description": "The Office of Consumer Affairs (OCA) provides financial support to non-profit and voluntary organizations in the production of high quality, independent and timely research on consumer issues. Organizations compete for the funding.  Funding is awarded on the basis of merit.",
        "service_type_id": 1,
        "responsibility_area_id": 52,
        "program_id": 120,
        "authority": "Industry Act",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 227,
        "name": "Issuing radio \/ spectrum licences",
        "service_id_number": "ISED-26",
        "description": "The program provides access to spectrum by issuing radio licences. ",
        "service_type_id": 4,
        "responsibility_area_id": 53,
        "program_id": 121,
        "authority": "Radiocommunication Act, Radiocommunication Regulations, Telecommunications Act",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 228,
        "name": "Issuing radio operator certificates",
        "service_id_number": "ISED-27",
        "description": "The program provides issues professional radio operator certificates and amateur radio operator certificates by determining the proficiency of individuals to operate radio apparatus.  The certificates allow individuals to operate radio apparatus in the maritime, aeronautical and amateur radio services as prescribed in the Radio communication Regulations. ",
        "service_type_id": 4,
        "responsibility_area_id": 53,
        "program_id": 121,
        "authority": "Radiocommunication Act, Radiocommunication Regulations, Telecommunications Act",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 229,
        "name": "Issuing broadcasting certificates",
        "service_id_number": "ISED-28",
        "description": "The program issues broadcasting certificates for radio apparatus that form part of a broadcasting undertaking. ",
        "service_type_id": 4,
        "responsibility_area_id": 53,
        "program_id": 121,
        "authority": "Radiocommunication Act, Radiocommunication Regulations, Telecommunications Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 230,
        "name": "Radio and terminal equipment certification",
        "service_id_number": "ISED-29",
        "description": "The program  assesses, registers and lists all radio and telecommunications apparatus that meet applicable technical standards ",
        "service_type_id": 4,
        "responsibility_area_id": 53,
        "program_id": 121,
        "authority": "Radiocommunication Act, Radiocommunication Regulations, Telecommunications Act",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 231,
        "name": "New\" Broadband Program (formerly Connecting Canadians)",
        "service_id_number": "ISED-30",
        "description": "The Government of Canada is committed to increasing high-speed broadband coverage for rural Canadians. Enhancing and extending access will create new employment opportunities for rural and northern Canadians by increasing their ability to participate in the digital economy. Budget 2016 committed $500 million over five years for a new program to extend and enhance broadband services in rural and remote communities. Investment in quality broadband networks will extend access to innovative services that improve education, health care, productivity and local quality of life. Further details on the new program will be available in the coming months.",
        "service_type_id": 1,
        "responsibility_area_id": 53,
        "program_id": 122,
        "authority": "Bill C15, Budget Implementation Act, Budget 2016",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 232,
        "name": "Northern Ontario Development Program (NODP)",
        "service_id_number": "ISED-31",
        "description": "FedNor’s Northern Ontario Development Program (NODP) provides financial support to promote economic growth, diversification, job creation, and self-reliant communities in Northern Ontario",
        "service_type_id": 1,
        "responsibility_area_id": 54,
        "program_id": 123,
        "authority": "Industry Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 233,
        "name": "Community Futures Program",
        "service_id_number": "ISED-32",
        "description": "FedNor's Community Futures Program supports 24 Community Futures Development Corporations (CFDCs) in Northern Ontario. CFDCs offer a wide variety of programs and services supporting community economic development and small business growth\n",
        "service_type_id": 1,
        "responsibility_area_id": 54,
        "program_id": 123,
        "authority": "Industry Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 234,
        "name": "Economic Development Initiative (EDI)",
        "service_id_number": "ISED-33",
        "description": "The Economic Development Initiative (EDI) provides funding for projects that encourage economic growth in the region's Francophone communities and that capitalize on economic opportunities made possible through the use of both official languages.\n",
        "service_type_id": 1,
        "responsibility_area_id": 54,
        "program_id": 123,
        "authority": "Industry Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 235,
        "name": "Canada 150 Community Infrastructure Program (CIP 150)",
        "service_id_number": "ISED-34",
        "description": "The Canada 150 Community Infrastructure Program (CIP150) provides funding to support the improvement of community infrastructure that provides community and cultural benefits for the public, including projects that ensure a better future for Aboriginal peoples and promote a clean-growth economy.",
        "service_type_id": 1,
        "responsibility_area_id": 54,
        "program_id": 123,
        "authority": "Industry Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 236,
        "name": "Income Tax Return Filing",
        "service_id_number": "CRA-1",
        "description": "Individual taxpayers are required to file an income tax return each year. CRA provides support, information and systems enabling the client to file, processes the return and issues a request for payment or provides a refund. CRA and\/or client-initiated reassessments may occur.",
        "service_type_id": 4,
        "responsibility_area_id": 55,
        "program_id": 124,
        "authority": "Income Tax Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 237,
        "name": "Authorize a Representative",
        "service_id_number": "CRA-2",
        "description": "Due to the confidential nature of account information, a formal process is in place for taxpayers to authorize a representative to deal with income tax matters on their behalf. A request can be made at any time to both authorize or cancel an authorized representative.",
        "service_type_id": 4,
        "responsibility_area_id": 55,
        "program_id": 125,
        "authority": "Section 241 of the Income Tax Act (ITA) and Section 295 of the Excise Tax Act (ETA)",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 238,
        "name": "GST\/HST Return Filing",
        "service_id_number": "CRA-3",
        "description": "A GST\/HST Return may be filed by both individual and corporate taxpayers. CRA provides the information necessary for the client to file, processes the return and issues a request for payment or provides a refund. CRA and\/or client-initiated reassessments may occur.",
        "service_type_id": 4,
        "responsibility_area_id": 55,
        "program_id": 126,
        "authority": "Excise Tax Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 239,
        "name": "GST\/HST Rulings",
        "service_id_number": "CRA-4",
        "description": "CRA provides GST\/HST technical interpretations and  GST\/HST rulings upon request. An interpretation is a written statement that sets out the CRA's view on how the Excise Tax Actapplies to a generic fact situation. An interpretation can also be a verbal statement that is provided in response to a toll-free telephone enquiry. A ruling is a written statement that sets out the CRA position on how the relevant provisions of the Excise Tax Act applies to a clearly defined fact situation.",
        "service_type_id": 4,
        "responsibility_area_id": 56,
        "program_id": 127,
        "authority": "Excise Tax Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 240,
        "name": "Corporation Income Tax Return Filing",
        "service_id_number": "CRA-5",
        "description": "Businesses are required to file a corporation income tax return each year. CRA provides the information necessary for the business to file, processes the return and issues a request for payment or provides a refund. CRA and\/or client-initiated reassessments may occur.",
        "service_type_id": 4,
        "responsibility_area_id": 55,
        "program_id": 128,
        "authority": "Income Tax Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 241,
        "name": "Excise Duty \/ Tax Return Filing",
        "service_id_number": "CRA-6",
        "description": "Excise taxes are imposed on certain petroleum products, heavy automobiles and air conditioners designed for automobiles. There is also a tax imposed on insurance premiums and a charge imposed under the Air Travellers Security Charge Act. Excise duties are imposed on beer, spirits, wine, and tobacco products. Manufacturers\/ businesses subject to excise tax are required to file a return. CRA provides the information necessary for the business to file, processes the return and issues a request for payment or provides a refund. CRA and\/or client-initiated reassessments may occur.",
        "service_type_id": 4,
        "responsibility_area_id": 55,
        "program_id": 129,
        "authority": "Excise Tax Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 242,
        "name": "Income Tax Rulings",
        "service_id_number": "CRA-7",
        "description": "CRA provides income tax technical interpretations and advance income tax rulings upon request. A technical interpretation  provides the CRA's interpretation of specific provisions of federal income tax law for no fee. A Ruling is a written statement confirming how the CRA's interpretation of specific provisions of federal income tax law applies to a definite transaction or transactions that a taxpayer is contemplating. A fee is charged.",
        "service_type_id": 4,
        "responsibility_area_id": 56,
        "program_id": 130,
        "authority": "Income Tax Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 243,
        "name": "Charity Information Return Filing",
        "service_id_number": "CRA-8",
        "description": "A registered charity is required to file an information return each year. A charity reports its activities, sources of revenue, and expenditures to maintain its status as a registered charity. ",
        "service_type_id": 4,
        "responsibility_area_id": 56,
        "program_id": 131,
        "authority": "Income Tax Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 244,
        "name": "Partnership Information Return Filing",
        "service_id_number": "CRA-9",
        "description": "A Partnership is required to file an information return each year.  CRA provides the information necessary for the client to file and processes the return.  CRA and\/or client-initiated reassessments may occur.",
        "service_type_id": 4,
        "responsibility_area_id": 55,
        "program_id": 132,
        "authority": "Income Tax Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 245,
        "name": "Canada Child Benefit payments",
        "service_id_number": "CRA-10",
        "description": "CRA provides Canadians with the tools and information to apply for the Canada Child Benefit.  CRA processes the applications made, determines eligibility and entitlement,  and issues payments.",
        "service_type_id": 1,
        "responsibility_area_id": 55,
        "program_id": 133,
        "authority": "Section 122.6 of the Income Tax Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 246,
        "name": "Goods and services tax \/ harmonized sales tax credit payments",
        "service_id_number": "CRA-11",
        "description": "CRA provides Canadians with the tools and information to apply for the GST\/HST credit.  CRA processes the applications made, determines eligibility and entitlement,  and issues payments.",
        "service_type_id": 1,
        "responsibility_area_id": 55,
        "program_id": 134,
        "authority": "Section 122.5 of the Income Tax Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 247,
        "name": "Children's Special Allowances payments",
        "service_id_number": "CRA-12",
        "description": "CRA provides departments, agencies, or institutions with the tools and information to apply for Children's Special Allowances with respect to any children under their care.  CRA processes the applications made, determines eligibility and entitlement,  and issues payments.",
        "service_type_id": 1,
        "responsibility_area_id": 55,
        "program_id": 135,
        "authority": "Children’s Special Allowances Act and Children's Special Allowances Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 248,
        "name": "Working Income Tax Benefit Advance Payments",
        "service_id_number": "CRA-13",
        "description": "CRA provides Canadians with the tools and information to apply for a multitude of benefits and credits including, but not limited to, the Canada Child Benefit and GST\/HST credit.  CRA processes the applications made, determines eligibility and entitlement,  and issues payments.",
        "service_type_id": 1,
        "responsibility_area_id": 55,
        "program_id": 136,
        "authority": "Section 122.7 of the Income Tax Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 249,
        "name": "Provincial and territorial tax credit payments",
        "service_id_number": "CRA-14",
        "description": "Building on its infrastructure to deliver the GST\/HST credit, CRA delivers similar tax credit programs on behalf of the provinces and territories. CRA processes the applications made, determines eligibility and entitlement,  and issues payments.",
        "service_type_id": 1,
        "responsibility_area_id": 55,
        "program_id": 137,
        "authority": "Various provincial and territorial acts and regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 250,
        "name": "Provincial and territorial child benefit program payments",
        "service_id_number": "CRA-15",
        "description": "Building on its infrastructure to deliver the CCB, CRA delivers similar child benefit programs on behalf of the provinces and territories. CRA processes the applications made, determines eligibility and entitlement,  and issues payments.",
        "service_type_id": 1,
        "responsibility_area_id": 55,
        "program_id": 138,
        "authority": "Various provincial and territorial acts and regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 251,
        "name": "Formal Review Request (Appeals)",
        "service_id_number": "CRA-16",
        "description": "CRA offers taxpayers the ability to receive a formal review should they disagree with their (re)assessment for no cost. Appeals representatives who were not involved in the original decision will conduct a formal and impartial review to reassess the taxpayers entitlement. Further recourse is available to clients via the Courts or an appropriate Tribunal.",
        "service_type_id": 4,
        "responsibility_area_id": 57,
        "program_id": 139,
        "authority": "Income Tax Act, Excise Tax Act, Ontario Corporations Tax Act, Excise Act (2001), Air Travellers Security Charge Act, Softwood Lumber Products Export Charge Act (2006)",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 252,
        "name": "Trust Income Tax Return Filing",
        "service_id_number": "CRA-17",
        "description": "Taxpayers are required to file a Trust Tax Return if it is subject to tax. CRA provides the information necessary for the taxpayer to file, processes the return and issues a request for payment or provides a refund.  CRA and\/or client-initiated reassessments may occur.",
        "service_type_id": 4,
        "responsibility_area_id": 55,
        "program_id": 140,
        "authority": "Income Tax Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 253,
        "name": "Business Number (BN) Registration",
        "service_id_number": "CRA-18",
        "description": "The BN is a nine-digit identifier for businesses to simplify their dealings with federal, provincial, and municipal governments in Canada. It aims to give each registered business its own unique number.",
        "service_type_id": 4,
        "responsibility_area_id": 55,
        "program_id": 141,
        "authority": "Income Tax Act and Excise Tax Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 254,
        "name": "Procurement and Contracting",
        "service_id_number": "PSPC-1",
        "description": "\"[...]The role of PWGSC in this area is to manage contracts for goods, services and construction on behalf of client departments and agencies of the Government of Canada and includes the management of contractual activities such as planning, acquisitions and contract administration.[...]\" http:\/\/www.tpsgc-pwgsc.gc.ca\/rapports-reports\/rpp\/2014-2015\/rpp-02-eng.html#s2.2.1.1",
        "service_type_id": 2,
        "responsibility_area_id": 58,
        "program_id": 142,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 255,
        "name": "Emergency Procurement",
        "service_id_number": "PSPC-2",
        "description": "To manage emergency procurement of goods, services or construction on behalf of client departments and agencies of the Government of Canada",
        "service_type_id": 2,
        "responsibility_area_id": 58,
        "program_id": 143,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 256,
        "name": "Goods and Services Management",
        "service_id_number": "PSPC-3",
        "description": "\"The Procurement Strategy and Performance Management Directorate of Public Works and Government Services Canada (PWGSC) works with procurement specialists and stakeholders across government departments to implement fair, competitive, and transparent national strategies to manage selected goods and services.\"https:\/\/buyandsell.gc.ca\/for-government\/buying-for-the-government-of-canada\/procurement-advice-and-support\/goods-and-services-management",
        "service_type_id": 2,
        "responsibility_area_id": 58,
        "program_id": 142,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 257,
        "name": "Build in Canada Innovation Program",
        "service_id_number": "PSPC-5",
        "description": "\"[...] helps companies bridge the pre-commercialization gap by procuring and testing late stage innovative goods and services within the federal government before taking them to  market [...].\" https:\/\/buyandsell.gc.ca\/initiatives-and-programs\/build-in-canada-innovation-program-bcip\/overview-of-bcip",
        "service_type_id": 1,
        "responsibility_area_id": 58,
        "program_id": 144,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 258,
        "name": "Government Electronic Tendering System",
        "service_id_number": "PSPC-6",
        "description": "\" Buyandsell.gc.ca\/tenders is the Government Electronic Tendering Service (GETS) where the Government of Canada posts bid solicitations (or tenders) and allows suppliers to search for bid opportunities on-line. Buyandsell.gc.ca\/tenders is the official site for Canada to meet its trade agreement obligations and the authoritative source for Government of Canada tenders.\" https:\/\/buyandsell.gc.ca\/procurement-data\/tenders\/about-tenders\n",
        "service_type_id": 2,
        "responsibility_area_id": 58,
        "program_id": 142,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 259,
        "name": "Pay and Benefits Services – Payments to employees",
        "service_id_number": "PSPC-7",
        "description": "The Public Service Pay Centre (Miramichi) provides sustainable quality pay services including: processing payments and benefits, and requests\/updates for employees in Pay Center client departments.  (Source: http:\/\/www.tpsgc-pwgsc.gc.ca\/remuneration-compensation\/paye-centre-pay\/index-eng.html)",
        "service_type_id": 1,
        "responsibility_area_id": 59,
        "program_id": 145,
        "authority": "Department of Public Works and Government Services Act, S. 12",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 260,
        "name": "Pay and Benefits Services – Client enquiries  NEW",
        "service_id_number": "PSPC-8",
        "description": "Public Services and Procurement Canada provides services to clients by responding to enquiries.  (Source: http:\/\/www.tpsgc-pwgsc.gc.ca\/remuneration-compensation\/paye-centre-pay\/index-eng.html)",
        "service_type_id": 1,
        "responsibility_area_id": 60,
        "program_id": 146,
        "authority": "Department of Public Works and Government Services Act, S. 12",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 261,
        "name": "Pay and Benefits Services – Online self-service tools to employees",
        "service_id_number": "PSPC-9",
        "description": "The Compensation Web Applications (CWA) provides employees with on-line access to services via CWA, including help desk.This includes a suite of pay self-services that enable employees to monitor and manage their personal compensation information, obtain pay stubs and tax slips as well as manage certain pay deductions, and report overtime.",
        "service_type_id": 1,
        "responsibility_area_id": 61,
        "program_id": 146,
        "authority": "Department of Public Works and Government Services Act, S. 12",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 262,
        "name": "Pay and Benefits Services- Online service tools to Compensation Advisors (CS - PPTSD)",
        "service_id_number": "PSPC-10",
        "description": "Provide compensation advisors with on-line access to services via CWA, including Public Service Health Care Plan (PSHCP), to enable management of employees' compensation.",
        "service_type_id": 1,
        "responsibility_area_id": 62,
        "program_id": 146,
        "authority": "Department of Public Works and Government Services Act, S. 12",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 263,
        "name": "Pay and Benefits Services – Pay & benefits administration services to departments and other organizations",
        "service_id_number": "PSPC-11",
        "description": "Provides functional guidance on pay and benefits administration, including the oversight of processes and systems,  the implementation of policies and legislation,  training manual(s), direction and advice to ensure consistent and accurate application of pay policies by departments and the Pay Center. (Source: http:\/\/www.tpsgc-pwgsc.gc.ca\/rapports-reports\/rpp\/2014-2015\/rpp-02-eng.html#s2.2.5.20)",
        "service_type_id": 1,
        "responsibility_area_id": 62,
        "program_id": 146,
        "authority": "Department of Public Works and Government Services Act, S. 12",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 264,
        "name": "Pension and Benefits Services – Payments to departing employees and annuitants",
        "service_id_number": "PSPC-12",
        "description": "Provide pension services to members under the PSSA and RCMPSA.  The Pension Centre  processes pension benefit payments.  (Source: text from OSSR and  http:\/\/www.tpsgc-pwgsc.gc.ca\/rapports-reports\/rpp\/2014-2015\/rpp-02-eng.html#s2.2.5.2)",
        "service_type_id": 1,
        "responsibility_area_id": 63,
        "program_id": 147,
        "authority": "Department of Public Works and Government Services Act, S. 13",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 265,
        "name": "Pension and Benefits Services – Client Enquiries",
        "service_id_number": "PSPC-13",
        "description": "Provide pension services to members under the PSSA and RCMPSA.  The Pension Centre offers: pension related estimates, answers queries and provides advice and guidance about pension entitlements to employees and pensioners  (Source: text from OSSR and  http:\/\/www.tpsgc-pwgsc.gc.ca\/rapports-reports\/rpp\/2014-2015\/rpp-02-eng.html#s2.2.5.2)",
        "service_type_id": 1,
        "responsibility_area_id": 63,
        "program_id": 147,
        "authority": "Department of Public Works and Government Services Act, S. 13",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 266,
        "name": "Pension and Benefits Services – Online self-service tool to employees (internal)",
        "service_id_number": "PSPC-14",
        "description": "Provide online self-service tool to employees to monitor and manage their personal pension information.  This includes: pension calculators, access to Pension & insurance Benefit statements and pension ‘what if’ scenarios to assist with financial planning. (Source: Compensation Annual Report; http:\/\/www.tpsgc-pwgsc.gc.ca\/rapports-reports\/rpp\/2014-2015\/rpp-02-eng.html#s2.2.5.2)",
        "service_type_id": null,
        "responsibility_area_id": 62,
        "program_id": 147,
        "authority": "Department of Public Works and Government Services Act ",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 267,
        "name": "Pension and Benefits Services - Pension & benefits administration services to departments\/plan sponsors",
        "service_id_number": "PSPC-15",
        "description": "Provide functional guidance for pension and benefit administration including the oversight of processes and systems, the implementation of policies and legislation, and the governance associated with providing services on behalf of the plan sponsor.  The Compensation Sector also provides specialized pension services for the administration of superannuation plans to the Department of National Defence, Members of Parliament (MPs), diplomatic services, lieutenant governors and judges.  In addition, Compensation Sector processes Canadian Armed Forces retired members’ pension benefit payments and answer queries and provides basic information on benefits and pension options (Source: Compensation Annual Report; http:\/\/www.tpsgc-pwgsc.gc.ca\/rapports-reports\/rpp\/2014-2015\/rpp-02-eng.html#s2.2.5.2) ",
        "service_type_id": 2,
        "responsibility_area_id": 64,
        "program_id": 147,
        "authority": "Department of Public Works and Government Services Act ",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 268,
        "name": "Receiver General Services – Managing of Government of Canada Deposits",
        "service_id_number": "PSPC-16",
        "description": "Managing of deposits for all departments and agencies. This includes: managing the receipt of all payments made to the Receiver General on behalf of the Government of Canada. Establishing Banking arrangments, reconciling bank accounts and reporting deposit details to departments. Also includes supporting processes and departmental enquiries (~3000 enquiries a year)",
        "service_type_id": 1,
        "responsibility_area_id": 65,
        "program_id": 148,
        "authority": "Financial Administration Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 269,
        "name": "Receiver General Services – Processing of payments",
        "service_id_number": "PSPC-17",
        "description": "Processing of payments for all departments and agencies. This includes: Accepting requisitions from Departments, managing the issuance of all payments through financial institutions and service providers on behalf of the Government of Canada. Includes supporting processes and enquiries from Departments and Canadians (202 743 enquiries for FY 2014-2015) The service offered to all government departments and only a small number of citizens call to enquire about payments however it is the responsibility of deptarments to support the citizens directly. ",
        "service_type_id": 1,
        "responsibility_area_id": 65,
        "program_id": 148,
        "authority": "Financial Administration Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 270,
        "name": "Receiver General Services – Cheque inquiry and fraud detection",
        "service_id_number": "PSPC-22",
        "description": "Respond to client requests for: cheque validation (financial institutions); copy of cheques (dep’t); advice re: affidavits (Cdns) and other activities related to stolen cheques",
        "service_type_id": 1,
        "responsibility_area_id": 66,
        "program_id": 149,
        "authority": "Department of Public Works and Government Services Canada  Act ",
        "service_agreements": 0,
        "service_orientation": null,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 271,
        "name": "Common Departmental Financial Management System",
        "service_id_number": "PSPC-23",
        "description": "The Common Departmental Financial Management System (CDFS) is a Departmental Financial and Materiel Management System (DFMS) solution service offered to small departments and agencies.",
        "service_type_id": 8,
        "responsibility_area_id": 67,
        "program_id": 149,
        "authority": "Department of Public Works and Government Services Canada  Act ",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 272,
        "name": "Office Accommodation Services",
        "service_id_number": "PSPC-24",
        "description": "\"[...]meets the accommodation needs of federal organizations by providing and maintaining a cost effective portfolio of office facilities and common use assets.\" ",
        "service_type_id": null,
        "responsibility_area_id": 68,
        "program_id": 150,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 273,
        "name": "Buildings and Facilities Maintenance",
        "service_id_number": "PSPC-25",
        "description": "PWGSC is the common service provider for office accommodation for federal departments.  As such it is the custodian of 26% of the federal real property portfolio, housing more than 100 departments and more than 250,000 personnel.  To manage and maintain the building required to fulfill this mandate, PWGSC provides building and facility maintenance services to its portfolio and to it tenants.  PWGSC also provides as an optional service, building and facility maintenance services to other federal custodians.  Through the National Services Call Centre, clients can access these services 24 hours a day, 7 days a week, 365 days a year.\n\n\"The National Service Call Center (NSCC) records property maintenance requests placed by federal employees, and dispatches these requests to qualified personnel on location. Acting as the liaison between clients and building maintenance personnel, the NSCC strives to ensure the smooth operation of facility and building maintenance. \nWe operate 24 hours a day, 7 days a week, 365 days a year. Our state-of-the-art facility enables us to provide first-class, bilingual service nationwide.\" http:\/\/nscc-cnas.pwgsc-tpsgc.gc.ca\/index-eng.cfm \n",
        "service_type_id": 1,
        "responsibility_area_id": 69,
        "program_id": 151,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 0,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 274,
        "name": "Event and Conference Facilities",
        "service_id_number": "PSPC-26",
        "description": "\" Public Works and Government Services Canada (PWGSC) provides all Federal departments, Agencies and Crown Corporations with the required support and services necessary for the management of planning, organizing, coordinating and implementation of federal\/provincial, national\/international, and protocol events and conferences. PWGSC has delegated to Events & Conference Management of the Real Property Branch the fulfillment of this mandate. \" http:\/\/publiservice.tpsgc-pwgsc.gc.ca\/bi-rp\/gec-ecm\/mandat-eng.html ",
        "service_type_id": 2,
        "responsibility_area_id": 69,
        "program_id": 151,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 275,
        "name": "Architecture, Interior Design and Engineering Services",
        "service_id_number": "PSPC-27",
        "description": "\"Architecture and Engineering (A&E) contracts are solicited through Real Property Contracting (RPC) contracting authority for sole source and competitive contracts.[...]\" ",
        "service_type_id": null,
        "responsibility_area_id": 69,
        "program_id": 152,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 276,
        "name": "Mechanical and Electrical Services (Maintenance and Operational Assurance)",
        "service_id_number": "PSPC-28",
        "description": "Real Property Services provides mechanical and electrical services ensuring the ongoing operation and maintenance of government of Canada buildings and their building systems, in the NCA. These services are provided by qualified trades people and through service management contracts.",
        "service_type_id": null,
        "responsibility_area_id": 69,
        "program_id": 152,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 277,
        "name": "Heritage Conservation",
        "service_id_number": "PSPC-29",
        "description": "\"Public Works and Government Services Canada (PWGSC) is committed to being a responsible custodian of its designated heritage building portfolio. As the third largest custodian of designated federal heritage buildings, PWGSC is responsible for over 130 designated buildings of different types across the country. It also provides asset management and project delivery services, as well as specialized technical advice expertise to other government departments on their heritage assets.\" ",
        "service_type_id": 1,
        "responsibility_area_id": 69,
        "program_id": 152,
        "authority": "Treasury Board's Policy on Management of Real Property",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 278,
        "name": "Environmental Services",
        "service_id_number": "PSPC-30",
        "description": "Real Property Services is to maintain facilities in a manner that adheres to safety, health and environmental standards mandated by applicable laws, codes, regulations and PWGSC's Sustainable Development Strategy commitments.",
        "service_type_id": 4,
        "responsibility_area_id": 69,
        "program_id": 152,
        "authority": "Environmental Acts and regulations, Sustainable Development Strategy, Canada Labour Code.",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 279,
        "name": "Payment in Lieu of Taxes",
        "service_id_number": "PSPC-31",
        "description": "The Government of Canada makes payments in lieu of taxes to recognize the services it receives from municipal governments and to pay its share of the costs to municipalities where federal property is located.\n\"[...] administers the Payments in Lieu of Taxes program on behalf of the Government of Canada by issuing payments to taxing authorities under the authority of the Payments in Lieu of Taxes Act. http:\/\/www.tpsgc-pwgsc.gc.ca\/rapports-reports\/rpp\/2014-2015\/rpp-02-eng.html#s2.2.2.4\n",
        "service_type_id": 4,
        "responsibility_area_id": 69,
        "program_id": 153,
        "authority": "Payment in Lieu of Taxes Act",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 280,
        "name": "Real Estate Disposals",
        "service_id_number": "PSPC-32",
        "description": "Public Works and Government Services Canada offers surplus federal real estate for sale",
        "service_type_id": 1,
        "responsibility_area_id": 69,
        "program_id": 152,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 1,
        "service_standards": 0,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 281,
        "name": "Real Property Advisory Services",
        "service_id_number": "PSPC-33",
        "description": "Optional real property planning and advisory services to support other government departments meet their obligations for effective planning and management of real property held under their custodianship.",
        "service_type_id": null,
        "responsibility_area_id": 69,
        "program_id": 152,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 282,
        "name": "Valuation Services",
        "service_id_number": "PSPC-34",
        "description": "PWGSC has sole authority for appraisals used for land conveyances. This arrangement relates to PWGSC's expertise and the management of risk in setting federal land values.",
        "service_type_id": null,
        "responsibility_area_id": 68,
        "program_id": 154,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 283,
        "name": "Expropriation",
        "service_id_number": "PSPC-35",
        "description": "Under the Expropriation Act, only the Minister of Public Works and Government Services can authorize expropriations. Services are provided to other departments on a cost recovery basis with mandatory 16(3) delegation.",
        "service_type_id": null,
        "responsibility_area_id": 69,
        "program_id": 152,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 284,
        "name": "Translation: Official Languages, Aboriginal Languages and Multilingual",
        "service_id_number": "PSPC-36",
        "description": "To provide translation services in both official languages, in Canada's Aboriginal languages and in over 100 foreign languages.",
        "service_type_id": 7,
        "responsibility_area_id": 70,
        "program_id": 155,
        "authority": "Department of Public Works and Government Services Act, Translation Bureau Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 285,
        "name": "Revision: Official Languages, Aboriginal Languages and Multilingual",
        "service_id_number": "PSPC-37",
        "description": "To offer revision services, including professional evaluation and quality assurance.",
        "service_type_id": 7,
        "responsibility_area_id": 70,
        "program_id": 155,
        "authority": "Department of Public Works and Government Services Act, Translation Bureau Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:02",
        "updated_at": "2017-05-26 19:27:02"
    },
    {
        "id": 286,
        "name": "On-site Translator",
        "service_id_number": "PSPC-38",
        "description": "To provide the services of a translator to work on-site with a client.",
        "service_type_id": 7,
        "responsibility_area_id": 70,
        "program_id": 155,
        "authority": "Department of Public Works and Government Services Act, Translation Bureau Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 287,
        "name": "Interpretation",
        "service_id_number": "PSPC-39",
        "description": "Interpretation:  \n• Conference interpretation: to provide interpretation in official languages, in Canada's Aboriginal languages and in Foreign languages at events such as international summits; bilateral or multilateral discussions between heads of state\/government; intra- or inter-departmental conferences; meetings between federal ministers and their provincial or territorial counterparts.\n• Closed Captioning and Visual interpretation: to provide deaf, or hard of hearing federal public servants with the following interpretation services:\n- Langue des signes québécoise (LSQ) \n- American Sign Language (ASL) \n- English and French oral (lip-reading) interpreting \n- Deaf-blind intervenor (tactile interpreting) \n",
        "service_type_id": 7,
        "responsibility_area_id": 70,
        "program_id": 156,
        "authority": "Department of Public Works and Government Services Act, Translation Bureau Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 288,
        "name": "Terminology Standardization",
        "service_id_number": "PSPC-40",
        "description": "To standardize and disseminate terminology through committee work, the development of terminology bulletins, the processing of term search requests and the enrichment of TERMIUM Plus®",
        "service_type_id": 7,
        "responsibility_area_id": 70,
        "program_id": 157,
        "authority": "Department of Public Works and Government Services Act, Translation Bureau Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 289,
        "name": "After-Hours Emergency Service",
        "service_id_number": "PSPC-41",
        "description": "To provide translation services outside the Bureau’s regular office hours for unexpected urgent requests.",
        "service_type_id": 7,
        "responsibility_area_id": 70,
        "program_id": 155,
        "authority": "Department of Public Works and Government Services Act, Translation Bureau Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 290,
        "name": "Contract Security (Company Registration, Personal Security Screening, Call Centre)",
        "service_id_number": "PSPC-42",
        "description": "The Contract Security Program contributes to the government's national security agenda and safeguards Canadian and foreign governments' sensitive information and assets entrusted to private sector companies or individuals when under government contract. In this context, it is responsible for evaluating and granting security clearance requests from industry. The program negotiates, concludes and administers international industrial arrangements between foreign governments and PWGSC to open new markets to Canadian industries in the domain of classified information and assets.(http:\/\/www.tpsgc-pwgsc.gc.ca\/rapports-reports\/rpp\/2016-2017\/rpp-02-eng.html#a141)",
        "service_type_id": 4,
        "responsibility_area_id": 71,
        "program_id": 158,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 291,
        "name": "Integrity Database Services",
        "service_id_number": "PSPC-43",
        "description": "The government-wide Integrity Regime for real property and procurement transactions ensures that the government does business with ethical suppliers in Canada and abroad.  The Integrity Database Services is responsible for  the integrity verification checks on suppliers for all government departments. This enables government departments  to cease business or refuse to do business with companies and individuals that are convicted of listed offences related to unethical business conduct. ",
        "service_type_id": 4,
        "responsibility_area_id": 71,
        "program_id": 159,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 292,
        "name": "Controlled Goods (Company Registration, Security Assessments, Exemption Applications for Visitors and Temporary Workers)",
        "service_id_number": "PSPC-44",
        "description": "The Controlled Goods Program, through the registration and inspection of private sector individuals and companies possessing, examining or transferring controlled goods, mitigates the risk of proliferation of tactical and strategic assets, helps strengthen Canada's defence trade controls, and supports Canada's domestic and international security interests.(http:\/\/www.tpsgc-pwgsc.gc.ca\/rapports-reports\/rpp\/2016-2017\/rpp-02-eng.html#a142)\n",
        "service_type_id": 4,
        "responsibility_area_id": 71,
        "program_id": 160,
        "authority": "Department of Public Works and Government Services Act; Defence Production Act(DPA); and Controlled Goods Regulations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 293,
        "name": "Specialized Forensic Accounting Services",
        "service_id_number": "PSPC-45",
        "description": "This sub-program provides forensic accounting services to national and international governments, law enforcement agencies and prosecution services on criminal investigations in areas such as white collar crime, proceeds of crime, commercial crime, money laundering, securities market fraud, organized crime, illicit drugs, and terrorist activities. The program supports police investigations and prosecutions by providing specialized advice, detailed forensic accounting reports, and expert witnesses testimony on the financial aspects of criminal investigations. The program's goal is to serve the Canadian Criminal Justice system by identifying, analyzing, and explaining complex financial and accounting elements of criminal activities in an objective, independent and non-technical manner, thus helping judges and juries make informed decisions. (http:\/\/www.tpsgc-pwgsc.gc.ca\/rapports-reports\/rpp\/2015-2016\/rpp-02-eng.html#s2.2.4.3) \n(http:\/\/www.tpsgc-pwgsc.gc.ca\/ggj-famg\/index-eng.html; \nhttp:\/\/www.tpsgc-pwgsc.gc.ca\/ggj-famg\/index-fra.html)",
        "service_type_id": 2,
        "responsibility_area_id": 71,
        "program_id": 161,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 294,
        "name": "Fairness Monitoring Services",
        "service_id_number": "PSPC-46",
        "description": "The Fairness Monitoring (FM) Program provides management, client departments, government suppliers, Parliament and Canadians with independent assurance that Public Works and Government Services Canada's (PWGSC) activities are conducted in a fair, open and transparent manner.\n(http:\/\/www.tpsgc-pwgsc.gc.ca\/se-fm\/index-eng.html)",
        "service_type_id": 2,
        "responsibility_area_id": 71,
        "program_id": 162,
        "authority": "Access to Information Act and section 7 of the Privacy Act; Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 295,
        "name": "Business Dispute Management Services",
        "service_id_number": "PSPC-47",
        "description": "The Business Dispute Management (BDM) program at Public Works and Government Services Canada (PWGSC) is a neutral and confidential resource for contractors, other government departments, and PWGSC employees when they experience difficulties with a contract where PWGSC is the contracting authority.  (http:\/\/www.tpsgc-pwgsc.gc.ca\/gcc-bdm\/mandat-mandate-eng.html)",
        "service_type_id": 2,
        "responsibility_area_id": 71,
        "program_id": 162,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 0,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 0,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 296,
        "name": "Shared Human Resources Services",
        "service_id_number": "PSPC-48",
        "description": "Shared Human Resources Services (SHRS) provides Human Resources (HR) and Compensation services to Government of Canada departments and agencies as required. \n\n",
        "service_type_id": 9,
        "responsibility_area_id": 72,
        "program_id": 163,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 297,
        "name": "Integrated Financial and Materiel Management Systems",
        "service_id_number": "PSPC-49",
        "description": "Integrated Financial and Materiel Management Systems (IFMS): the largest government-wide Enterprise Resource Planning system for financial\/materiel management. IFMS is an integrated management system combining finance, materiel management, assets, salary management, project management and many more functionalities. SSI supports the IFMS cluster which plans, builds and implements the solution for common application by cluster members and ensures it aligns with the GC transformation agenda.",
        "service_type_id": null,
        "responsibility_area_id": 72,
        "program_id": 164,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 298,
        "name": "FreeBalance",
        "service_id_number": "PSPC-50",
        "description": "FreeBalance is an Integrated Financial Management Information System and is one of the government's approved common shared financial management systems used by small- to medium- sized departments and agencies. SSI supports the FreeBalance cluster which plans, builds and implements the solution for common application by cluster members and ensures it aligns with the GC transformation agenda.\n",
        "service_type_id": 8,
        "responsibility_area_id": 72,
        "program_id": 163,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 299,
        "name": "GCDOCS",
        "service_id_number": "PSPC-51",
        "description": "\"GCDOCS is the official enterprise document and records management (EDRM) solution of the Government of Canada. It is an automated bilingual archiving and IM tool that helps organizations meet their IM life cycle management obligations. The GCDOCS EPMO (Enterprise Program Management Office) assists organizations in their standardization, consolidation, and re-engineering of EDRM practices; helps fills IM gaps that hinder the broad deployment; and provides IM tools, templates, and best practices while assisting organizations in their deployment.\"",
        "service_type_id": 10,
        "responsibility_area_id": 73,
        "program_id": 165,
        "authority": "Department of Public Works and Government Services Act; Directive on Recordkeeping",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 300,
        "name": "Shared Case Management System",
        "service_id_number": "PSPC-52",
        "description": "The Shared Case Management System (SCMS) provides a shared common case management solution to departments and agencies across the Government of Canada. SCMS enables an organization or person to automate, manage, track and control activities, tasks and workflow processes. The service model includes providing application management services, including hosting services on a single, common Government of Canada instance.",
        "service_type_id": 10,
        "responsibility_area_id": 73,
        "program_id": 166,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 301,
        "name": "MyGCHR",
        "service_id_number": "PSPC-53",
        "description": "PWGSC MyGCHR Program establishes a standard service for the delivery of a common Human Resource solution for the Government of Canada to improve the effectiveness and efficiency of human resources management, enable effective decision-making and reduce the total cost of GC ownership.",
        "service_type_id": 9,
        "responsibility_area_id": 74,
        "program_id": 167,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 302,
        "name": "Canadian General Standards Board",
        "service_id_number": "PSPC-54",
        "description": "\"The Canadian General Standards Board provides standards development and conformity assessment services, including programs for certification of products and services, registration of quality and environmental management systems, and related services. These services are provided in support of economic, regulatory, procurement, health, safety and environmental interests. \"http:\/\/www.tpsgc-pwgsc.gc.ca\/ongc-cgsb\/cn-cu-eng.html\" ",
        "service_type_id": 4,
        "responsibility_area_id": 72,
        "program_id": 168,
        "authority": "Department of Public Works and Government Services Act; Common Services Policy",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 303,
        "name": "Seized Property Management",
        "service_id_number": "PSPC-55",
        "description": "\"The Seized Property Management Directorate (SPMD) of Public Works and Government Services Canada (PWGSC) manages assets, including those seized or restrained under specific sections of the Criminal Code, the Controlled Drugs and Substances Act and the Proceeds of Crime (Money-Laundering) and Terrorist Financing Act.\" http:\/\/www.tpsgc-pwgsc.gc.ca\/app-acq\/gbs-spm\/index-eng.html",
        "service_type_id": 2,
        "responsibility_area_id": 72,
        "program_id": 169,
        "authority": "Department of Public Works and Government Services Act and the Seized Property Management Act",
        "service_agreements": 1,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 304,
        "name": "GCSurplus",
        "service_id_number": "PSPC-56",
        "description": "GCSurplus sells moveable assets like working electronics, office equipment, vehicles as well as moveable capital assets like ships and planes on behalf of 100 federal Departments and Agencies. ",
        "service_type_id": null,
        "responsibility_area_id": 72,
        "program_id": 169,
        "authority": "Department of Public Works and Government Services Act; Common Services Policy; Surplus Crown Assets Act",
        "service_agreements": 0,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 305,
        "name": "Shared Travel Services",
        "service_id_number": "PSPC-57",
        "description": "The Shared Travel Services (STS) Portal, provided by travel management company Hogg Robinson Group (HRG), is the gateway to the Government of Canada’s (GC) travel management solution for GC employees and authorized contractors. https:\/\/isuite6.hrgworldwide.com\/gcportal\/en-ca\/sts.aspx\n\n\n",
        "service_type_id": null,
        "responsibility_area_id": 72,
        "program_id": 170,
        "authority": "Department of Public Works and Government Services Act; Common Services Policy",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 306,
        "name": "Document Imaging Services",
        "service_id_number": "PSPC-58",
        "description": "Document imaging services -- both internal service delivery and the Document Imaging Enterprise Solution for the Government of Canada using pre-screened private sector imaging companies. Document imaging solutions assist departments and agencies wanting to eliminate paper-based processing, increase speed of service to Canadians and reduce their operating costs (including:  creating images, assigning relevant metadata to images, storing both in a database, and then providing user access to the image\/metadata database for query or retrieval).",
        "service_type_id": 10,
        "responsibility_area_id": 66,
        "program_id": 171,
        "authority": "Department of Public Works and Government Services Act",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 307,
        "name": "Advertising – Coordination and Training Services",
        "service_id_number": "PSPC-59",
        "description": "The Advertising Coordination and Partnerships Directorate provides mandatory coordination and advisory services on advertising and support for marketing communications partnering arrangements. It also promotes continuous learning, information sharing, and best practices through training opportunities and working tools for departments to increase knowledge and skills within the GC",
        "service_type_id": 7,
        "responsibility_area_id": 72,
        "program_id": 172,
        "authority": "Department of Public Works and Government Services Act; Communications Policy of the Government of Canada; Common Services Policy; Contracting Policy",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 308,
        "name": "Public Opinion Research – Coordination and Training Services",
        "service_id_number": "PSPC-60",
        "description": "\"PWGSC's Public Opinion Research Directorate provides mandatory coordination and advisory services to Government of Canada organizations on public opinion research. It also fosters partnerships and the sharing of public opinion research across the federal government.\" http:\/\/www.tpsgc-pwgsc.gc.ca\/rop-por\/index-eng.html",
        "service_type_id": 7,
        "responsibility_area_id": 72,
        "program_id": 172,
        "authority": "Department of Public Works and Government Services Act; Policy on Communications and Federal Identity; Common Services Policy; Contracting Policy",
        "service_agreements": 0,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 309,
        "name": "Canada Gazette – Publication of Official Notices, Laws and Regulations",
        "service_id_number": "PSPC-61",
        "description": "\"[...] Published within the Canada Gazette are new statutes and regulations, proposed regulations, decisions of administrative boards and an assortment of government notices. Private sector notices which are required by statute to be published to inform the public also appear in the Canada Gazette.\" http:\/\/www.gazette.gc.ca\/cg-gc\/lm-sp-eng.html#i6\n\n",
        "service_type_id": null,
        "responsibility_area_id": 72,
        "program_id": 172,
        "authority": "Department of Public Works and Government Services Act; Statutory Instruments Act; Policy on Communications and Federal Identity; Statutory Instruments Regulations\/\nCommon Services Policy",
        "service_agreements": 0,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 310,
        "name": "Electronic Access to Publications",
        "service_id_number": "PSPC-62",
        "description": "\"[Publishing and Depository Services] (PDS) acquires and catalogues an extensive variety of Government of Canada publications. Some publications are listed for reference purposes only while others are available in portable downloadable electronic format.\" http:\/\/publications.gc.ca\/site\/eng\/programs\/aboutUs.html\n\n",
        "service_type_id": null,
        "responsibility_area_id": 72,
        "program_id": 172,
        "authority": "Department of Public Works and Government Services Act; Policy on Communications and Federal Identity",
        "service_agreements": 0,
        "service_orientation": 3,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 311,
        "name": "Electronic Media Monitoring",
        "service_id_number": "PSPC-63",
        "description": "\"PWGSC's Electronic Media Monitoring (EMM) Program provides a cost-efficient optional common service to assist departments and agencies meet their responsibilities to monitor and analyze the public environment \" http:\/\/www.tpsgc-pwgsc.gc.ca\/sem-emm\/index-eng.html",
        "service_type_id": 7,
        "responsibility_area_id": 72,
        "program_id": 172,
        "authority": "Department of Public Works and Government Services Act; Policy on Communications and Federal Identity; Common Services Policy",
        "service_agreements": 1,
        "service_orientation": 2,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 312,
        "name": "Disability Pensions",
        "service_id_number": "VAC-1",
        "description": "Compensation and recognition for service-related disability or death",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 173,
        "authority": "Pension Act; RCMP Superannuation Act; RCMP Pension Continuation Act; Civilian War-related Benefits Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 313,
        "name": "Disability Awards",
        "service_id_number": "VAC-2",
        "description": "Compensation and recognition for service-related disability or death",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 174,
        "authority": "Canadian Forces Members and Veterans Re-establishment and Compensation Act, and Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 314,
        "name": "Permanent Impairment Allowance",
        "service_id_number": "VAC-3",
        "description": "Taxable monthly benefit payable for life when career options are limited because of a service related injury or illness",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 175,
        "authority": "Canadian Forces Members and Veterans Re-establishment and Compensation Act, and Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 315,
        "name": "Exceptional Incapacity Allowance",
        "service_id_number": "VAC-4",
        "description": "Tax-free monthly payment for those receiving a disability pension and who are exceptionally incapacitated",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 176,
        "authority": "Pension Act; RCMP Superannuation Act; RCMP Pension Continuation Act; Civilian War-related Benefits Act; New Veterans Charter",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 316,
        "name": "Treatment Allowance",
        "service_id_number": "VAC-5",
        "description": "Payments made to eligible pensioners and members in respect of a period of acute care for a pensioned condition provided in a hospital or on an out-patient basis",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 177,
        "authority": "Department of Veterans Affairs Act; Veterans Health Care Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 317,
        "name": "Other Allowances",
        "service_id_number": "VAC-6",
        "description": "Compensation for the effects of a service-related disability including clothing allowance and attendance allowance",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 178,
        "authority": "Pension Act; RCMP Superannuation Act;  RCMP Pension Continuation Act; Civilian War-related Benefits Act; Canadian Forces Members and Veterans Re-establishment and Compensation Act, and Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 318,
        "name": "Critical Injury Benefit",
        "service_id_number": "VAC-7",
        "description": "Tax-free lump-sum award to address the immediate impacts of the most severe and traumatic service-related injuries or diseases sustained by Canadian Armed Forces members",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 179,
        "authority": "Canadian Forces Members and Veterans Re-establishment and Compensation Act, and Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 319,
        "name": "Family Caregiver Relief Benefit",
        "service_id_number": "VAC-8",
        "description": "Tax-free lump sum grant to ensure Veterans continue to get the support they need when their informal caregivers are temporarily unavailable",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 180,
        "authority": "Canadian Forces Members and Veterans Re-establishment and Compensation Act, and Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 320,
        "name": "Intermediate and Long Term Care",
        "service_id_number": "VAC-9",
        "description": "Financial support towards the cost of long term care ",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 181,
        "authority": "Department of Veterans Affairs Act;  Veterans Health Care Regulations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 321,
        "name": "Health Care Benefits and Services",
        "service_id_number": "VAC-10",
        "description": "Financial support towards medical, surgical, or dental examinations or treatment; surgical or prosthetic devices and aids and their maintenance; home adaptations to accommodate the use of devices or aids; preventive health care; pharmaceuticals; and travel and other expenses incurred to access these benefits",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 182,
        "authority": "Veterans Health Care Regulations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 322,
        "name": "Veterans Independence Program",
        "service_id_number": "VAC-11",
        "description": "Financial assistance to services to help Veterans remain self-sufficient in their home and community, such as personal care; access to nutrition; and health and support services",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 183,
        "authority": "Department of Veterans Affairs Act; Veterans Health Care Regulations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 323,
        "name": "Canadian Forces Income Support Benefit",
        "service_id_number": "VAC-12",
        "description": "A tax-free monthly benefit to help low-income CAF Veterans, survivors, and dependent children",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 184,
        "authority": "Canadian Forces Members and Veterans Re-establishment and Compensation Act, and Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 324,
        "name": "Earnings Loss Benefit",
        "service_id_number": "VAC-13",
        "description": "A taxable, monthly benefit that ensures your total income will be at least 75% of your gross pre-release military salary",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 185,
        "authority": "Canadian Forces Members and Veterans Re-establishment and Compensation Act, and Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 325,
        "name": "Educational Assistance",
        "service_id_number": "VAC-14",
        "description": "Monthly financial support to the student plus assistance with related expenses",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 186,
        "authority": "Children of Deceased Veterans Education Assistance Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 326,
        "name": "Supplementary Retirement Benefit",
        "service_id_number": "VAC-15",
        "description": "A taxable, lump-sum benefit provided to individuals who were in receipt of Earnings Loss Benefits on a long term basis. It is provided in recognition of the lower pension plan contributions that an individual may have made",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 187,
        "authority": "Canadian Forces Members and Veterans Re-establishment and Compensation Act, and Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 327,
        "name": "War Veterans Allowance",
        "service_id_number": "VAC-16",
        "description": "Financial assistance for low income Veterans to help meet basic needs",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 188,
        "authority": "War Veterans Allowance Act;  Assistance Fund Regulations",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 328,
        "name": "Rehabilitation Services and Vocational Assistance Program",
        "service_id_number": "VAC-17",
        "description": "Rehabilitation and vocational assistance services to ensure that Veterans improve their health to the fullest extent possible and adjust to life at home, in their community or at work",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 189,
        "authority": "Disability and Death Compensation; Financial Support Program; Health Care Program and Re-establishments Services",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 329,
        "name": "Case Management and Support Services",
        "service_id_number": "VAC-18",
        "description": "Collaborative, organized and dynamic process to enable clients with complex needs, and their families, to achieve mutually agreed upon goals through assessment, analysis, case planning, monitoring\/evaluation, and disengagement",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 190,
        "authority": "Disability and Death Compensation; Financial Support Program; Health Care Program and Re-establishments Services",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 330,
        "name": "Career Transition Services",
        "service_id_number": "VAC-19",
        "description": "Financial support to reimburse Veterans and survivors for services such as career counselling, job-search training and job-finding assistance",
        "service_type_id": 1,
        "responsibility_area_id": 75,
        "program_id": 191,
        "authority": "Canadian Forces Members and Veterans Re-establishment and Compensation Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 331,
        "name": "Public Education and Awareness",
        "service_id_number": "VAC-20",
        "description": "Veterans' Week resources to help Canadians learn more about Veterans' sacrifices and achievements",
        "service_type_id": null,
        "responsibility_area_id": 76,
        "program_id": 192,
        "authority": "Order in Council P.C. 1965-688",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 332,
        "name": "Ceremonies and Events",
        "service_id_number": "VAC-21",
        "description": "Remembrance ceremonies and other events, notably to highlight significant milestones honouring Veterans' sacrifices and achievements",
        "service_type_id": null,
        "responsibility_area_id": 76,
        "program_id": 193,
        "authority": "Order in Council P.C. 1965-688;  Canadian Honours System (various orders in council, letters patent and other statutory instruments)",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 333,
        "name": "Partnerships and Collaborations",
        "service_id_number": "VAC-22",
        "description": "Funding to support commemorative initiatives",
        "service_type_id": 1,
        "responsibility_area_id": 76,
        "program_id": 194,
        "authority": "Order in Council P.C. 1965-688",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 334,
        "name": "Memorial and Cemetery Maintenance",
        "service_id_number": "VAC-23",
        "description": "Care and maintenance of Veterans' graves",
        "service_type_id": 1,
        "responsibility_area_id": 76,
        "program_id": 195,
        "authority": "Veterans Burial Regulations, 2005; Order in Council P.C. 1965-688",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 335,
        "name": "Funeral and Burial Program",
        "service_id_number": "VAC-24",
        "description": "Funding for funeral and burial benefits",
        "service_type_id": 1,
        "responsibility_area_id": 76,
        "program_id": 196,
        "authority": "Veterans Burial Regulations",
        "service_agreements": 1,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 336,
        "name": "Access to Information and Privacy",
        "service_id_number": "VAC-25",
        "description": "Response to access to information and privacy requests from the Canadian public",
        "service_type_id": 1,
        "responsibility_area_id": 77,
        "program_id": 190,
        "authority": "Access to Information Act; Privact Act; Security of Canada Information Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 1,
        "service_standards": 1,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    },
    {
        "id": 337,
        "name": "BPA",
        "service_id_number": "VAC-26",
        "description": "Legal advice and counselling for applicants who are dissatisfied with decisions rendered on their application(s) for disability benefits. Legal representation for applicants seeking a review or an appeal before an administrative tribunal",
        "service_type_id": 2,
        "responsibility_area_id": 78,
        "program_id": 190,
        "authority": "Department of Veterans Affairs Act",
        "service_agreements": 0,
        "service_orientation": 1,
        "user_fee": 0,
        "service_standards": 0,
        "performance_targets": 1,
        "created_at": "2017-05-26 19:27:03",
        "updated_at": "2017-05-26 19:27:03"
    }
]
```

### HTTP Request
`GET api/services`

`HEAD api/services`


<!-- END_80f2d5622bc4bfdfda56d97cae89dd0c -->

<!-- START_196a7f1713436fb7bdbcc38d3c079d98 -->
## Get a Specific Service

> Example request:

```bash
curl -X GET "http://service-dashboard.dev/api/services/{service}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://service-dashboard.dev/api/services/{service}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "AgriRisk",
    "service_id_number": "AAFC-001",
    "description": "Provides support for research and development, implementation and administration of new risk management tools for use in the agriculture sector. ",
    "service_type_id": 1,
    "responsibility_area_id": 1,
    "program_id": 1,
    "authority": "TB Submission",
    "service_agreements": 1,
    "service_orientation": 1,
    "user_fee": 0,
    "service_standards": 1,
    "performance_targets": 1,
    "created_at": "2017-05-26 19:27:00",
    "updated_at": "2017-05-26 19:27:00"
}
```

### HTTP Request
`GET api/services/{service}`

`HEAD api/services/{service}`


<!-- END_196a7f1713436fb7bdbcc38d3c079d98 -->

<!-- START_edcf1b9d39aa56f9ecf4990648c457b0 -->
## Get Channel Volumes for a Service

> Example request:

```bash
curl -X GET "http://service-dashboard.dev/api/services/{service}/volumes" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://service-dashboard.dev/api/services/{service}/volumes",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "service_id": 1,
        "channel_id": 1,
        "applications": 14,
        "outputs": 3,
        "created_at": "2017-05-26 19:27:00",
        "updated_at": "2017-05-26 19:27:00"
    },
    {
        "id": 2,
        "service_id": 1,
        "channel_id": 2,
        "applications": null,
        "outputs": null,
        "created_at": "2017-05-26 19:27:00",
        "updated_at": "2017-05-26 19:27:00"
    },
    {
        "id": 3,
        "service_id": 1,
        "channel_id": 3,
        "applications": null,
        "outputs": null,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    },
    {
        "id": 4,
        "service_id": 1,
        "channel_id": 4,
        "applications": null,
        "outputs": null,
        "created_at": "2017-05-26 19:27:01",
        "updated_at": "2017-05-26 19:27:01"
    }
]
```

### HTTP Request
`GET api/services/{service}/volumes`

`HEAD api/services/{service}/volumes`


<!-- END_edcf1b9d39aa56f9ecf4990648c457b0 -->

