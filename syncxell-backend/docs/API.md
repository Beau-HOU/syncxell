# SYNCXELL LLC — API Reference

**Base URL (dev):** `http://localhost:1337/api`  
**Swagger UI:** `http://localhost:1337/documentation`  
**Strapi version:** 5.49.0  
**Authentication:** Public routes need no token. Admin routes require a Bearer token.

---

## Table of Contents

1. [Authentication](#authentication)
2. [Common Query Parameters](#common-query-parameters)
3. [Public Read Endpoints](#public-read-endpoints)
   - [Service Categories](#service-categories)
   - [Sub-Services](#sub-services)
   - [Team Members](#team-members)
   - [Case Studies](#case-studies)
   - [Certifications](#certifications)
   - [Blog Posts](#blog-posts)
   - [Testimonials](#testimonials)
   - [Partners](#partners)
   - [FAQs](#faqs)
   - [Company Info (Single Type)](#company-info)
   - [Homepage Hero (Single Type)](#homepage-hero)
   - [Site Settings (Single Type)](#site-settings)
4. [Aggregated Custom Endpoints](#aggregated-custom-endpoints)
   - [GET /homepage-data](#get-homepage-data)
   - [GET /services-by-category](#get-services-by-category)
5. [Form Submission Endpoints (Write-Only)](#form-submission-endpoints)
   - [POST /rfq-submissions](#post-rfq-submissions)
   - [POST /teaming-requests](#post-teaming-requests)
6. [File Upload](#file-upload)
7. [Admin-Only Endpoints](#admin-only-endpoints)
8. [Error Reference](#error-reference)

---

## Authentication

All **read** endpoints are public — no token required.

Form **submission** endpoints (`POST /rfq-submissions`, `POST /teaming-requests`) are also public (write-only). The response is intentionally minimal — it never returns the full record.

**Admin operations** (reading form submissions, CRUD on all content) require an API token:

```http
Authorization: Bearer <YOUR_API_TOKEN>
```

Generate tokens in: **Admin Panel → Settings → API Tokens → Create new API Token**.

---

## Common Query Parameters

All Strapi v5 collection endpoints support these query parameters:

| Parameter | Description | Example |
|---|---|---|
| `locale` | Language (`en` or `fr`) | `?locale=fr` |
| `populate` | Include relations / media | `?populate=cover_image,category` |
| `populate=*` | Populate all first-level relations | `?populate=*` |
| `filters[field][$eq]` | Exact match filter | `?filters[is_featured][$eq]=true` |
| `filters[field][$in][0]` | Array filter | `?filters[client_sector][$in][0]=federal` |
| `sort` | Sort field(s) | `?sort=display_order:asc` |
| `pagination[page]` | Page number | `?pagination[page]=1` |
| `pagination[pageSize]` | Items per page (default 25, max 100) | `?pagination[pageSize]=10` |
| `fields` | Field selection (reduce payload) | `?fields[0]=name&fields[1]=slug` |

---

## Public Read Endpoints

### Service Categories

The 8 main service lines of SYNCXELL.

```http
GET /api/service-categories
```

**Query examples:**

```bash
# All categories, sorted by display_order, with sub-services
curl "http://localhost:1337/api/service-categories?sort=display_order:asc&populate=sub_services"

# Only featured categories
curl "http://localhost:1337/api/service-categories?filters[is_featured][$eq]=true"

# French locale
curl "http://localhost:1337/api/service-categories?locale=fr"

# Single category by ID
curl "http://localhost:1337/api/service-categories/1?populate=sub_services,icon_svg,cover_image"
```

**Response fields:**

| Field | Type | i18n |
|---|---|---|
| `name` | string | ✓ |
| `slug` | string (uid) | — |
| `short_description` | text | ✓ |
| `full_description` | richtext | ✓ |
| `icon_name` | string | — |
| `icon_svg` | media | — |
| `cover_image` | media | — |
| `display_order` | integer | — |
| `is_featured` | boolean | — |
| `meta_title` | string | ✓ |
| `meta_description` | text | ✓ |
| `sub_services` | relation (populate) | — |

---

### Sub-Services

The detailed service offerings nested under each category.

```http
GET /api/sub-services
```

```bash
# All sub-services for a specific category
curl "http://localhost:1337/api/sub-services?filters[category][slug][$eq]=cybersecurity-compliance&populate=category"

# Featured sub-services
curl "http://localhost:1337/api/sub-services?filters[is_featured][$eq]=true&populate=category,cover_image"

# Targeting federal sector
curl "http://localhost:1337/api/sub-services?filters[target_sectors][$containsi]=federal"

# Single sub-service with all relations
curl "http://localhost:1337/api/sub-services/1?populate=category,case_studies,cover_image"
```

**Response fields:**

| Field | Type | Notes |
|---|---|---|
| `name` | string | i18n |
| `slug` | string | — |
| `tagline` | string | i18n |
| `description` | richtext | i18n |
| `key_features` | json | Array of strings |
| `technologies` | json | Array of strings |
| `target_sectors` | json | e.g. `["federal","banking"]` |
| `cover_image` | media | — |
| `display_order` | integer | — |
| `is_featured` | boolean | — |
| `category` | relation | populate to get category data |
| `case_studies` | relation (many) | populate for related case studies |

---

### Team Members

```http
GET /api/team-members
```

```bash
# Leadership team, sorted
curl "http://localhost:1337/api/team-members?filters[is_leadership][$eq]=true&sort=display_order:asc&populate=photo,certifications_held"

# All members
curl "http://localhost:1337/api/team-members?populate=photo&sort=display_order:asc"

# Single member
curl "http://localhost:1337/api/team-members/1?populate=photo,certifications_held"
```

> **Note:** The `email` field on team members is intentionally excluded from public API responses via field-level security. It is admin-only.

---

### Case Studies

```http
GET /api/case-studies
```

```bash
# Featured case studies
curl "http://localhost:1337/api/case-studies?filters[is_featured][$eq]=true&populate=cover_image"

# By sector
curl "http://localhost:1337/api/case-studies?filters[client_sector][$eq]=federal&populate=cover_image,related_services"

# Non-confidential only (show client name)
curl "http://localhost:1337/api/case-studies?filters[confidential][$eq]=false"

# Single case study — full detail
curl "http://localhost:1337/api/case-studies/1?populate=cover_image,gallery,related_services"
```

**`client_sector` enum values:** `federal` | `local_gov` | `banking` | `legal` | `other`

**`engagement_type` enum values:** `prime_contract` | `subcontract` | `internal`

> When `confidential: true`, display `client_name` as "Confidential" on the frontend even though the field is populated.

---

### Certifications

```http
GET /api/certifications
```

```bash
# All active certifications
curl "http://localhost:1337/api/certifications?filters[is_active][$eq]=true&sort=display_order:asc&populate=logo"

# By category
curl "http://localhost:1337/api/certifications?filters[category][$eq]=compliance"
```

**`category` enum values:** `security` | `compliance` | `cloud` | `quality` | `other`

---

### Blog Posts

```http
GET /api/blog-posts
```

```bash
# Latest posts with pagination
curl "http://localhost:1337/api/blog-posts?sort=published_date:desc&populate=cover_image,author&pagination[page]=1&pagination[pageSize]=9"

# Featured posts
curl "http://localhost:1337/api/blog-posts?filters[is_featured][$eq]=true&populate=cover_image,author"

# By category
curl "http://localhost:1337/api/blog-posts?filters[category][$eq]=compliance"

# Single post
curl "http://localhost:1337/api/blog-posts/1?populate=cover_image,author.photo"
```

**`category` enum values:** `news` | `insight` | `compliance` | `case_study` | `announcement`

---

### Testimonials

```http
GET /api/testimonials
```

```bash
# Featured testimonials for homepage
curl "http://localhost:1337/api/testimonials?filters[is_featured][$eq]=true&sort=display_order:asc&populate=author_photo"

# By sector
curl "http://localhost:1337/api/testimonials?filters[author_sector][$eq]=banking"
```

---

### Partners

```http
GET /api/partners
```

```bash
# Technology partners
curl "http://localhost:1337/api/partners?filters[partner_type][$eq]=technology&sort=display_order:asc&populate=logo"

# Featured partners
curl "http://localhost:1337/api/partners?filters[is_featured][$eq]=true&populate=logo"
```

**`partner_type` enum values:** `technology` | `teaming` | `client` | `certification_body`

---

### FAQs

```http
GET /api/faqs
```

```bash
# FAQs for federal visitors
curl "http://localhost:1337/api/faqs?filters[target_sector][$in][0]=federal&filters[target_sector][$in][1]=all&sort=display_order:asc&locale=en"

# All FAQs, sorted
curl "http://localhost:1337/api/faqs?sort=display_order:asc"
```

**`target_sector` enum values:** `federal` | `local_gov` | `banking` | `legal` | `all`

**`category` enum values:** `general` | `procurement` | `security` | `services` | `billing`

---

### Company Info

Single type — returns one object (no array wrapper).

```http
GET /api/company-info
```

```bash
# Full company info with all media
curl "http://localhost:1337/api/company-info?populate=logo,logo_white,favicon,capability_statement_pdf"

# French locale
curl "http://localhost:1337/api/company-info?locale=fr&populate=logo,capability_statement_pdf"
```

**Key fields for Government Procurement Portal:**

| Field | Description |
|---|---|
| `cage_code` | CAGE code for SAM.gov verification |
| `uei` | Unique Entity Identifier |
| `primary_naics` | Primary NAICS code |
| `naics_codes` | JSON array of `{code, description}` objects |
| `business_size` | `small` or `other_than_small` |
| `socioeconomic_designations` | JSON array of designations |
| `capability_statement_pdf` | PDF media object — use `.url` for direct download link |

---

### Homepage Hero

```http
GET /api/homepage-hero
```

```bash
curl "http://localhost:1337/api/homepage-hero?populate=hero_image,hero_image_mobile&locale=en"
curl "http://localhost:1337/api/homepage-hero?locale=fr"
```

---

### Site Settings

```http
GET /api/site-settings
```

```bash
curl "http://localhost:1337/api/site-settings?locale=en"
```

> `rfq_email_recipient` and `teaming_email_recipient` are internal-use fields. They are readable via the API but should not be displayed to end users.

---

## Aggregated Custom Endpoints

These custom endpoints aggregate multiple content types in a single request — use them to power the homepage and services page without waterfalling multiple API calls.

### GET /homepage-data

Returns hero, company info, featured categories, featured case studies, and testimonials in one call.

```http
GET /api/homepage-data
```

```bash
curl "http://localhost:1337/api/homepage-data?locale=en"
curl "http://localhost:1337/api/homepage-data?locale=fr"
```

**Response shape:**

```json
{
  "data": {
    "hero": { /* homepage-hero fields */ },
    "companyInfo": { /* company-info fields with logo + capability_statement_pdf */ },
    "featuredCategories": [ /* service-categories where is_featured=true, with sub_services */ ],
    "featuredCaseStudies": [ /* case-studies where is_featured=true, with cover_image */ ],
    "testimonials": [ /* testimonials where is_featured=true */ ]
  }
}
```

> Any sub-object is `null` / `[]` if the content has not yet been created in the CMS. The frontend must handle null values gracefully.

---

### GET /services-by-category

Returns all service categories with their nested sub-services, sorted by `display_order`. Use this to render the full services page.

```http
GET /api/services-by-category
```

```bash
curl "http://localhost:1337/api/services-by-category?locale=en"
curl "http://localhost:1337/api/services-by-category?locale=fr"
```

**Response shape:**

```json
{
  "data": [
    {
      "id": "...",
      "name": "Cloud Infrastructure & Management",
      "slug": "cloud-infrastructure-management",
      "sub_services": [
        { "name": "Cloud Architecture & Migration", "slug": "..." },
        ...
      ]
    }
  ]
}
```

---

## Form Submission Endpoints

These are **write-only** — `GET` on these endpoints returns **403** for public users. Only the minimal acknowledgment is returned (never the full record).

### POST /rfq-submissions

Submit a Request for Quote. A notification email is sent to `rfq_email_recipient` (from site-settings) and an acknowledgment is sent to the submitter.

```http
POST /api/rfq-submissions
Content-Type: application/json
```

**Allowed body fields** (all others are silently stripped):

```json
{
  "data": {
    "contact_first_name": "John",
    "contact_last_name": "Doe",
    "contact_email": "john.doe@agency.gov",
    "contact_phone": "+1 (202) 555-0100",
    "organization": "Department of Homeland Security",
    "sector": "federal",
    "services_requested": ["cybersecurity-compliance", "cloud-infrastructure-management"],
    "project_description": "Migrate 80 VMs to AWS GovCloud with FISMA High ATO.",
    "federal_agency": "Department of Homeland Security",
    "solicitation_number": "70RDND24R00000001",
    "set_aside_type": "small_business",
    "municipality_name": null,
    "it_budget_range": null,
    "desired_timeline": "months_6",
    "compliance_needs": ["FISMA High", "NIST SP 800-53"],
    "how_did_you_hear": "sam_gov",
    "consent_to_contact": true
  }
}
```

**`sector` enum:** `federal` | `local_gov` | `banking` | `legal` | `other`

**`set_aside_type` enum:** `sba_8a` | `hubzone` | `sdvosb` | `wosb` | `small_business` | `none`

**`it_budget_range` enum:** `under_50k` | `tier_50k_250k` | `tier_250k_1m` | `tier_1m_5m` | `over_5m`

**`desired_timeline` enum:** `immediate` | `months_3` | `months_6` | `year_1` | `exploratory`

**`how_did_you_hear` enum:** `sam_gov` | `linkedin` | `referral` | `search` | `other`

**cURL example:**

```bash
curl -X POST http://localhost:1337/api/rfq-submissions \
  -H "Content-Type: application/json" \
  -d '{
    "data": {
      "contact_first_name": "John",
      "contact_last_name": "Doe",
      "contact_email": "john@agency.gov",
      "organization": "DHS",
      "sector": "federal",
      "project_description": "Cloud migration to AWS GovCloud with FISMA High ATO.",
      "federal_agency": "Department of Homeland Security",
      "consent_to_contact": true
    }
  }'
```

**Success response (200):**

```json
{
  "data": {
    "id": "abc123documentId",
    "message": "Votre demande a été reçue. Nous vous contacterons prochainement."
  }
}
```

**Error responses:**

| Status | Cause |
|---|---|
| `400` | `consent_to_contact` is false or missing |
| `422` | Validation error (required field missing) |

> `status`, `submission_ip`, and `internal_notes` are **server-side only** — they are set automatically and never readable from the public API.

---

### POST /teaming-requests

Submit a teaming request to partner with SYNCXELL on a government opportunity.

```http
POST /api/teaming-requests
Content-Type: application/json
```

```json
{
  "data": {
    "company_name": "Acme Prime Contractor LLC",
    "contact_name": "Jane Smith",
    "contact_email": "jane.smith@acme.com",
    "contact_phone": "+1 (703) 555-0192",
    "company_website": "https://www.acme.com",
    "cage_code": "1A2B3",
    "uei": "ACME123456789",
    "opportunity_name": "GSA IT Modernization BPA",
    "solicitation_number": "47QRAA23R0001",
    "issuing_agency": "General Services Administration",
    "submission_deadline": "2024-06-30",
    "services_needed_from_syncxell": ["Cloud Migration", "Cybersecurity Assessment"],
    "estimated_subcontract_value": "tier_100k_500k",
    "message": "Looking for a qualified subcontractor with FedRAMP experience.",
    "consent_to_contact": true
  }
}
```

**`estimated_subcontract_value` enum:** `under_100k` | `tier_100k_500k` | `tier_500k_1m` | `over_1m` | `unknown`

**cURL example:**

```bash
curl -X POST http://localhost:1337/api/teaming-requests \
  -H "Content-Type: application/json" \
  -d '{
    "data": {
      "company_name": "Acme Prime Contractor",
      "contact_name": "Jane Smith",
      "contact_email": "jane@acme.com",
      "opportunity_name": "GSA IT Modernization BPA",
      "consent_to_contact": true
    }
  }'
```

**Success response (200):**

```json
{
  "data": {
    "id": "xyz789documentId",
    "message": "Votre demande de teaming a été reçue. Nous vous contacterons sous 48h."
  }
}
```

---

## File Upload

Accepted MIME types are whitelisted server-side: `image/*`, `application/pdf`, `application/msword`, `application/vnd.openxmlformats-officedocument.wordprocessingml.document`, `application/vnd.ms-excel`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`.

```bash
# Upload a PDF (e.g., for RFP documents)
curl -X POST http://localhost:1337/api/upload \
  -F "files=@/path/to/rfp.pdf"

# Response includes the file ID to reference in form submissions:
# [{"id": 1, "url": "/uploads/rfp_abc123.pdf", ...}]
```

Rejected file types return **422 Unprocessable Entity**.

---

## Admin-Only Endpoints

All require `Authorization: Bearer <token>` with an API token that has `Read` or `Full Access` scope.

```bash
# List all RFQ submissions
curl -H "Authorization: Bearer <token>" \
  "http://localhost:1337/api/rfq-submissions?sort=createdAt:desc&populate=rfp_documents"

# Get a specific RFQ submission
curl -H "Authorization: Bearer <token>" \
  "http://localhost:1337/api/rfq-submissions/<documentId>"

# Update RFQ status (internal workflow)
curl -X PUT -H "Authorization: Bearer <token>" \
  -H "Content-Type: application/json" \
  "http://localhost:1337/api/rfq-submissions/<documentId>" \
  -d '{"data": {"status": "in_review", "internal_notes": "Reviewing scope with CTO."}}'

# List all teaming requests
curl -H "Authorization: Bearer <token>" \
  "http://localhost:1337/api/teaming-requests?sort=createdAt:desc"
```

**RFQ `status` values:** `new` | `in_review` | `contacted` | `closed`

**Teaming `status` values:** `new` | `reviewing` | `under_nda` | `active` | `declined`

---

## Error Reference

| HTTP Status | Meaning |
|---|---|
| `200` | Success |
| `400 Bad Request` | Missing required field or validation failed (e.g. no consent) |
| `401 Unauthorized` | Bearer token missing or invalid |
| `403 Forbidden` | Route exists but permission not granted to this role |
| `404 Not Found` | Resource does not exist |
| `413 Payload Too Large` | Upload exceeds 50 MB limit |
| `422 Unprocessable Entity` | MIME type rejected or data format invalid |
| `500 Internal Server Error` | Unexpected server error — check Strapi logs |

---

## Seeding Test Data

The database is auto-seeded on first startup when empty. To force a re-seed:

```bash
# Wipes nothing — just inserts data if FORCE_SEED=true
FORCE_SEED=true npm run dev
```

Or use the npm script alias:

```bash
npm run seed
```

The seeder inserts:
- 8 service categories
- 17 sub-services (2–3 per category)
- 4 team members
- 8 certifications
- 3 case studies
- 4 testimonials
- 6 partners
- 8 FAQs
- 3 blog posts
- Single-type data: company-info, homepage-hero, site-settings

---

## Interactive Swagger UI

With `@strapi/plugin-documentation` enabled, a full interactive Swagger UI is available at:

```
http://localhost:1337/documentation
```

The OpenAPI 3.0 JSON spec is at:

```
http://localhost:1337/documentation/v1.0.0/full_documentation.json
```

You can import this URL into Postman, Insomnia, or any OpenAPI-compatible client.