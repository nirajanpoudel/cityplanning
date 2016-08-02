<?php

/* themes/lacity/partials/menu.html.twig */
class __TwigTemplate_728fa6d9e30fccca9474370464d455fd8e458657f89bae93f3aa36f24a6baf17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<ul class=\"nav navbar-nav\">
\t<li class=\"dropdown dropdown-large\"><a href=\"#\" class=\"dropdown-toggle\"
\t\tdata-toggle=\"dropdown\">Policy Planning <b class=\"caret\"></b></a>

\t\t<ul class=\"dropdown-menu dropdown-menu-large row\">
\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Planning Process</li>
\t\t\t\t\t<li><a
\t\t\t\t\t\thref=\"";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "policy-planning/planning-processes/land-use-entitlement-permit-process\">Land
\t\t\t\t\t\t\tUse entitlement Process</a></li>
\t\t\t\t\t<li><a href=\"#\">Public Participation Process for Community Planning</a></li>
\t\t\t\t\t<li><a href=\"#\">Entitlement Process</a></li>
\t\t\t\t\t<li><a
\t\t\t\t\t\thref=\"";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "policy-planning/planning-processes/california-environmental-quality-act-(CEQA)-process\">California
\t\t\t\t\t\t\tEnvironmental Quality Act</a></li>
\t\t\t\t\t<li><a href=\"#\">Community Plan Flow Chart</a></li>
\t\t\t\t\t<li><a href=\"#\">Community Design Overlay Flow Chart</a></li>
\t\t\t\t\t<li><a href=\"#\">Streetscape Plan Flow Chart</a></li>
\t\t\t\t\t<li><a href=\"#\">Historic Preservation Plan Flow Chart</a></li>
\t\t\t\t\t<li><a href=\"#\">Historic Cultural Monument Designation Flow Chart</a></li>
\t\t\t\t\t<li><a href=\"#\">Expedited Processing Section Brochure</a></li>
\t\t\t\t\t<li><a href=\"#\">General Plan Amendment Initiations Memo</a></li>
\t\t\t\t\t<li><a href=\"#\">Small Lot Policy and Design Guidelines</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>

\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">General Plan</li>
\t\t\t\t\t<li><a href=\"";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "policy-planning/general-plan/framework\">Framework</a></li>
\t\t\t\t\t<li><a
\t\t\t\t\t\thref=\"";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "policy-planning/general-plan/general-plan-elements\">General
\t\t\t\t\t\t\tPlan Elements</a></li>
\t\t\t\t\t<li><a
\t\t\t\t\t\thref=\"";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "policy-planning/general-plan/community-plans\">Community
\t\t\t\t\t\t\tPlans</a></li>
\t\t\t\t\t<li><a
\t\t\t\t\t\thref=\"";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "policy-planning/general-plan/public-participation-in-the-community-planning-process\">Public
\t\t\t\t\t\t\tParticipation Process</a></li>

\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>

\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Ordinances</li>
\t\t\t\t\t<li><a href=\"#\">Adopted Ordinances</a></li>
\t\t\t\t\t<li><a href=\"#\">Proposed Ordinances</a></li>

\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\"><a href=\"#\">New Community Plans</a></li>
\t\t\t\t\t<li class=\"divider\"></li>

\t\t\t\t\t<li class=\"dropdown-header\"><a
\t\t\t\t\t\thref=\"policy-planning/historic-preservation\">Historic Preservation</a></li>
\t\t\t\t\t<li class=\"divider\"></li>

\t\t\t\t\t<li class=\"dropdown-header\"><a
\t\t\t\t\t\thref=\"policy-planning/policy-initiatives\">Policy Initiatives</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>

\t\t</ul></li>
\t<li class=\"dropdown dropdown-large\"><a href=\"#\" class=\"dropdown-toggle\"
\t\tdata-toggle=\"dropdown\">Project Planning <b class=\"caret\"></b></a>

\t\t<ul class=\"dropdown-menu dropdown-menu-large row\">
\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Zoning Information</li>
\t\t\t\t\t<li><a href=\"#\">Zone Information & Map Access System (ZIMAS)</a></li>
\t\t\t\t\t<li><a href=\"#\">LADBS Zoning Code Manual & Commentary</a></li>
\t\t\t\t\t<li><a href=\"#\">Planning and Zoning Code (American Legal Publishing
\t\t\t\t\t\t\tCorporation)</a></li>
\t\t\t\t\t<li><a href=\"#\">Fees</a></li>
\t\t\t\t\t<li><a href=\"#\">Parking Specifications</a></li>
\t\t\t\t\t<li><a href=\"#\">Designated Building Sites (Historical Structures)</a></li>
\t\t\t\t\t<li><a href=\"#\">Summary of Zoning Regulations</a></li>
\t\t\t\t\t<li><a href=\"#\">Summary of Conditional Use Permits and Other
\t\t\t\t\t\t\tQuasi-Judicial Approvals</a></li>
\t\t\t\t\t<li><a href=\"#\">Tenant Relocation</a></li>
\t\t\t\t\t<li><a href=\"#\">Use List</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Environmental Review</li>
\t\t\t\t\t<li><a href=\"#\">Negative Declaration Public Notices</a></li>
\t\t\t\t\t<li><a href=\"#\">Notice of Preparation & Public Scoping Meetings</a></li>
\t\t\t\t\t<li><a href=\"#\">Draft EIR</a></li>
\t\t\t\t\t<li><a href=\"#\">Final EIR</a></li>
\t\t\t\t\t<li><a href=\"#\">Sunshine Canyon Landfill</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Beverage & Entertainment Process</li>
\t\t\t\t\t<li><a href=\"#\">Submit a request</a></li>
\t\t\t\t\t<li><a href=\"#\">Case Filing Matrix</a></li>
\t\t\t\t\t<li><a href=\"#\">Memos Information</a></li>
\t\t\t\t\t<li><a href=\"#\">Application Package</a></li>
\t\t\t\t\t<li><a href=\"#\">Fee Estimator</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>

\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\"><a href=\"#\">Expedited Process</a></li>
\t\t\t\t\t<li class=\"divider\"></li>

\t\t\t\t\t<li class=\"dropdown-header\"><a href=\"#\">Project Planning Centers</a></li>
\t\t\t\t\t<li class=\"divider\"></li>

\t\t\t\t\t<li class=\"dropdown-header\"><a href=\"#\">Land Use Permit Process</a></li>
\t\t\t\t\t<li class=\"divider\"></li>

\t\t\t\t\t<li class=\"dropdown-header\"><a href=\"#\">Condition Compliance</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>


\t\t</ul></li>
\t<li class=\"dropdown dropdown-large\"><a href=\"#\" class=\"dropdown-toggle\"
\t\tdata-toggle=\"dropdown\">Our Data <b class=\"caret\"></b></a>

\t\t<ul class=\"dropdown-menu dropdown-menu-large row\">
\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Case Report</li>
\t\t\t\t\t<li><a href=\"#\">Case Filing by Certified Neighborhood Council</a></li>
\t\t\t\t\t<li><a href=\"#\">Case Filing by City Council District</a></li>
\t\t\t\t\t<li><a href=\"#\">Case Filing by Community Plan Area</a></li>
\t\t\t\t\t<li><a href=\"#\">Case Prefix and Suffix Codes</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>

\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Map Gallery</li>
\t\t\t\t\t<li><a href=\"#\">ArcGIS Shapefiles</a></li>
\t\t\t\t\t<li><a href=\"#\">PDF Map Gallery</a></li>
\t\t\t\t\t<li><a href=\"#\">Interactive Story Maps</a></li>

\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>

\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Demographics</li>
\t\t\t\t\t<li><a href=\"#\">Demographics Statistics Report</a></li>
\t\t\t\t\t<li><a href=\"#\">Census Information</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>

\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\"><a href=\"http://zimas.lacity.org/\"
\t\t\t\t\t\ttarget=\"_blank\">Zoning/Property Info(ZIMAS)</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li><img class=\"img-responsive\" src=\"http://placehold.it/200x150\" /></li>
\t\t\t\t</ul>
\t\t\t</li>


\t\t</ul></li>



\t<li class=\"dropdown dropdown-large\"><a href=\"#\" class=\"dropdown-toggle\"
\t\tdata-toggle=\"dropdown\">Forms & Publications <b class=\"caret\"></b></a>

\t\t<ul class=\"dropdown-menu dropdown-menu-large row\">
\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Master Forms</li>
\t\t\t\t\t<li><a href=\"#\">Department of City Planning Application </a></li>
\t\t\t\t\t<li><a href=\"#\">Master Land Use Instruction Sheet</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>

\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Frequently Use Forms</li>
\t\t\t\t\t<li><a href=\"#\">Adaptive Reuse</a></li>
\t\t\t\t\t<li><a href=\"#\">Administrative Clearance</a></li>
\t\t\t\t\t<li><a href=\"#\">Building Form Checklist</a></li>
\t\t\t\t\t<li><a href=\"#\">Checklist for Case Filing </a></li>
\t\t\t\t\t<li><a href=\"#\">More forms ...</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>

\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Publications</li>
\t\t\t\t\t<li><a href=\"#\">Demographics Statistics Report - October 01, 2015</a></li>
\t\t\t\t\t<li><a href=\"#\">Mobility Plan 2035</a></li>
\t\t\t\t\t<li><a href=\"#\">Plan for a Healthy Los Angeles</a></li>
\t\t\t\t\t<li><a href=\"#\">Housing Element 2013 - 2021</a></li>
\t\t\t\t\t<li><a href=\"#\">Cornfield Arroyo Seco Specific Plan</a></li>
\t\t\t\t\t<li><a href=\"#\">More publications ...</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>

\t\t\t<li class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t<li><img class=\"img-responsive\" src=\"http://placehold.it/200x150\" /></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>

\t\t</ul></li>
\t<li class=\"dropdown dropdown-large\"><a href=\"#\" class=\"dropdown-toggle\"
\t\tdata-toggle=\"dropdown\">Our Organization <b class=\"caret\"></b></a>

\t\t<ul class=\"dropdown-menu dropdown-menu-large row\">
\t\t\t<li class=\"col-sm-4\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">About</li>
\t\t\t\t\t<li><a href=\"";
        // line 237
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "about/about-us\">About us</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 238
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "about/mission-statement\">Mission
\t\t\t\t\t\t\tStatement</a></li>
\t\t\t\t\t<li><a href=\"about/the-long-view-planning-for-2035\">The Long View:
\t\t\t\t\t\t\tPlanning for 2035</a></li>
\t\t\t\t\t<li><a
\t\t\t\t\t\thref=\"";
        // line 243
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "about/reshaping-the-21st-century-metropolis\">LADCP:
\t\t\t\t\t\t\tReshaping the 21st Century Metropolis</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 245
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "about/organization-charts\">Organization
\t\t\t\t\t\t\tCharts</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"col-sm-4\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Commissions & Hearings</li>
\t\t\t\t\t<li><a href=\"";
        // line 253
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "commissions-hearings/36\">Central Los Angeles</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 254
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "commissions-hearings/31\">City Planning Commission</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 255
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "commissions-hearings/32\">Cultural Heritage Commission</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 256
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "commissions-hearings/37\">East Los Angeles</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 257
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "commissions-hearings/39\">Harbor</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 258
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "commissions-hearings/33\">North Valley</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 259
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "commissions-hearings/38\">South Los Angeles</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 260
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "commissions-hearings/34\">South Valley</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 261
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "commissions-hearings/35\">West Los Angeles</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"col-sm-4\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\"><a href=\"";
        // line 267
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "news/\">News</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul></li>
\t<li class=\"dropdown dropdown-large\"><a href=\"#\" class=\"dropdown-toggle\"
\t\tdata-toggle=\"dropdown\">Location<b class=\"caret\"></b></a>

\t\t<ul class=\"dropdown-menu dropdown-menu-large row\">
\t\t\t<li class=\"col-sm-12 col-md-12\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Visit us</li>
\t\t\t\t\t<li><a href=\"#\">Main office</a></li>
\t\t\t\t\t<li><a href=\"#\">Branche Offices</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul></li>

\t<li class=\"dropdown dropdown-large\"><a href=\"#\" class=\"dropdown-toggle\"
\t\tdata-toggle=\"dropdown\">Contact<b class=\"caret\"></b></a>

\t\t<ul class=\"dropdown-menu dropdown-menu-large row\">
\t\t\t<li class=\"col-sm-12 col-md-12\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown-header\">Customer Serices</li>
\t\t\t\t\t<li><a href=\"#\">Contact us</a></li>
\t\t\t\t\t<li><a href=\"#\">Staff Directory</a></li>
\t\t\t\t\t<li><a href=\"#\">Department List</a></li>
\t\t\t\t\t<li><a href=\"#\">Feedback Form</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "themes/lacity/partials/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 267,  359 => 261,  355 => 260,  351 => 259,  347 => 258,  343 => 257,  339 => 256,  335 => 255,  331 => 254,  327 => 253,  316 => 245,  311 => 243,  303 => 238,  299 => 237,  99 => 40,  93 => 37,  87 => 34,  82 => 32,  62 => 15,  54 => 10,  43 => 1,);
    }
}
/* <ul class="nav navbar-nav">*/
/* 	<li class="dropdown dropdown-large"><a href="#" class="dropdown-toggle"*/
/* 		data-toggle="dropdown">Policy Planning <b class="caret"></b></a>*/
/* */
/* 		<ul class="dropdown-menu dropdown-menu-large row">*/
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Planning Process</li>*/
/* 					<li><a*/
/* 						href="{{base_path}}policy-planning/planning-processes/land-use-entitlement-permit-process">Land*/
/* 							Use entitlement Process</a></li>*/
/* 					<li><a href="#">Public Participation Process for Community Planning</a></li>*/
/* 					<li><a href="#">Entitlement Process</a></li>*/
/* 					<li><a*/
/* 						href="{{base_path}}policy-planning/planning-processes/california-environmental-quality-act-(CEQA)-process">California*/
/* 							Environmental Quality Act</a></li>*/
/* 					<li><a href="#">Community Plan Flow Chart</a></li>*/
/* 					<li><a href="#">Community Design Overlay Flow Chart</a></li>*/
/* 					<li><a href="#">Streetscape Plan Flow Chart</a></li>*/
/* 					<li><a href="#">Historic Preservation Plan Flow Chart</a></li>*/
/* 					<li><a href="#">Historic Cultural Monument Designation Flow Chart</a></li>*/
/* 					<li><a href="#">Expedited Processing Section Brochure</a></li>*/
/* 					<li><a href="#">General Plan Amendment Initiations Memo</a></li>*/
/* 					<li><a href="#">Small Lot Policy and Design Guidelines</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* */
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">General Plan</li>*/
/* 					<li><a href="{{base_path}}policy-planning/general-plan/framework">Framework</a></li>*/
/* 					<li><a*/
/* 						href="{{base_path}}policy-planning/general-plan/general-plan-elements">General*/
/* 							Plan Elements</a></li>*/
/* 					<li><a*/
/* 						href="{{base_path}}policy-planning/general-plan/community-plans">Community*/
/* 							Plans</a></li>*/
/* 					<li><a*/
/* 						href="{{base_path}}policy-planning/general-plan/public-participation-in-the-community-planning-process">Public*/
/* 							Participation Process</a></li>*/
/* */
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* */
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Ordinances</li>*/
/* 					<li><a href="#">Adopted Ordinances</a></li>*/
/* 					<li><a href="#">Proposed Ordinances</a></li>*/
/* */
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header"><a href="#">New Community Plans</a></li>*/
/* 					<li class="divider"></li>*/
/* */
/* 					<li class="dropdown-header"><a*/
/* 						href="policy-planning/historic-preservation">Historic Preservation</a></li>*/
/* 					<li class="divider"></li>*/
/* */
/* 					<li class="dropdown-header"><a*/
/* 						href="policy-planning/policy-initiatives">Policy Initiatives</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* */
/* 		</ul></li>*/
/* 	<li class="dropdown dropdown-large"><a href="#" class="dropdown-toggle"*/
/* 		data-toggle="dropdown">Project Planning <b class="caret"></b></a>*/
/* */
/* 		<ul class="dropdown-menu dropdown-menu-large row">*/
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Zoning Information</li>*/
/* 					<li><a href="#">Zone Information & Map Access System (ZIMAS)</a></li>*/
/* 					<li><a href="#">LADBS Zoning Code Manual & Commentary</a></li>*/
/* 					<li><a href="#">Planning and Zoning Code (American Legal Publishing*/
/* 							Corporation)</a></li>*/
/* 					<li><a href="#">Fees</a></li>*/
/* 					<li><a href="#">Parking Specifications</a></li>*/
/* 					<li><a href="#">Designated Building Sites (Historical Structures)</a></li>*/
/* 					<li><a href="#">Summary of Zoning Regulations</a></li>*/
/* 					<li><a href="#">Summary of Conditional Use Permits and Other*/
/* 							Quasi-Judicial Approvals</a></li>*/
/* 					<li><a href="#">Tenant Relocation</a></li>*/
/* 					<li><a href="#">Use List</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Environmental Review</li>*/
/* 					<li><a href="#">Negative Declaration Public Notices</a></li>*/
/* 					<li><a href="#">Notice of Preparation & Public Scoping Meetings</a></li>*/
/* 					<li><a href="#">Draft EIR</a></li>*/
/* 					<li><a href="#">Final EIR</a></li>*/
/* 					<li><a href="#">Sunshine Canyon Landfill</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Beverage & Entertainment Process</li>*/
/* 					<li><a href="#">Submit a request</a></li>*/
/* 					<li><a href="#">Case Filing Matrix</a></li>*/
/* 					<li><a href="#">Memos Information</a></li>*/
/* 					<li><a href="#">Application Package</a></li>*/
/* 					<li><a href="#">Fee Estimator</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* */
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header"><a href="#">Expedited Process</a></li>*/
/* 					<li class="divider"></li>*/
/* */
/* 					<li class="dropdown-header"><a href="#">Project Planning Centers</a></li>*/
/* 					<li class="divider"></li>*/
/* */
/* 					<li class="dropdown-header"><a href="#">Land Use Permit Process</a></li>*/
/* 					<li class="divider"></li>*/
/* */
/* 					<li class="dropdown-header"><a href="#">Condition Compliance</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* */
/* */
/* 		</ul></li>*/
/* 	<li class="dropdown dropdown-large"><a href="#" class="dropdown-toggle"*/
/* 		data-toggle="dropdown">Our Data <b class="caret"></b></a>*/
/* */
/* 		<ul class="dropdown-menu dropdown-menu-large row">*/
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Case Report</li>*/
/* 					<li><a href="#">Case Filing by Certified Neighborhood Council</a></li>*/
/* 					<li><a href="#">Case Filing by City Council District</a></li>*/
/* 					<li><a href="#">Case Filing by Community Plan Area</a></li>*/
/* 					<li><a href="#">Case Prefix and Suffix Codes</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* */
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Map Gallery</li>*/
/* 					<li><a href="#">ArcGIS Shapefiles</a></li>*/
/* 					<li><a href="#">PDF Map Gallery</a></li>*/
/* 					<li><a href="#">Interactive Story Maps</a></li>*/
/* */
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* */
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Demographics</li>*/
/* 					<li><a href="#">Demographics Statistics Report</a></li>*/
/* 					<li><a href="#">Census Information</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* */
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header"><a href="http://zimas.lacity.org/"*/
/* 						target="_blank">Zoning/Property Info(ZIMAS)</a></li>*/
/* 					<li class="divider"></li>*/
/* 					<li><img class="img-responsive" src="http://placehold.it/200x150" /></li>*/
/* 				</ul>*/
/* 			</li>*/
/* */
/* */
/* 		</ul></li>*/
/* */
/* */
/* */
/* 	<li class="dropdown dropdown-large"><a href="#" class="dropdown-toggle"*/
/* 		data-toggle="dropdown">Forms & Publications <b class="caret"></b></a>*/
/* */
/* 		<ul class="dropdown-menu dropdown-menu-large row">*/
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Master Forms</li>*/
/* 					<li><a href="#">Department of City Planning Application </a></li>*/
/* 					<li><a href="#">Master Land Use Instruction Sheet</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* */
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Frequently Use Forms</li>*/
/* 					<li><a href="#">Adaptive Reuse</a></li>*/
/* 					<li><a href="#">Administrative Clearance</a></li>*/
/* 					<li><a href="#">Building Form Checklist</a></li>*/
/* 					<li><a href="#">Checklist for Case Filing </a></li>*/
/* 					<li><a href="#">More forms ...</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* */
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Publications</li>*/
/* 					<li><a href="#">Demographics Statistics Report - October 01, 2015</a></li>*/
/* 					<li><a href="#">Mobility Plan 2035</a></li>*/
/* 					<li><a href="#">Plan for a Healthy Los Angeles</a></li>*/
/* 					<li><a href="#">Housing Element 2013 - 2021</a></li>*/
/* 					<li><a href="#">Cornfield Arroyo Seco Specific Plan</a></li>*/
/* 					<li><a href="#">More publications ...</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* */
/* 			<li class="col-sm-3">*/
/* 				<ul>*/
/* 					<li><img class="img-responsive" src="http://placehold.it/200x150" /></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* */
/* 		</ul></li>*/
/* 	<li class="dropdown dropdown-large"><a href="#" class="dropdown-toggle"*/
/* 		data-toggle="dropdown">Our Organization <b class="caret"></b></a>*/
/* */
/* 		<ul class="dropdown-menu dropdown-menu-large row">*/
/* 			<li class="col-sm-4">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">About</li>*/
/* 					<li><a href="{{base_path}}about/about-us">About us</a></li>*/
/* 					<li><a href="{{base_path}}about/mission-statement">Mission*/
/* 							Statement</a></li>*/
/* 					<li><a href="about/the-long-view-planning-for-2035">The Long View:*/
/* 							Planning for 2035</a></li>*/
/* 					<li><a*/
/* 						href="{{base_path}}about/reshaping-the-21st-century-metropolis">LADCP:*/
/* 							Reshaping the 21st Century Metropolis</a></li>*/
/* 					<li><a href="{{base_path}}about/organization-charts">Organization*/
/* 							Charts</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 			<li class="col-sm-4">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Commissions & Hearings</li>*/
/* 					<li><a href="{{base_path}}commissions-hearings/36">Central Los Angeles</a></li>*/
/* 					<li><a href="{{base_path}}commissions-hearings/31">City Planning Commission</a></li>*/
/* 					<li><a href="{{base_path}}commissions-hearings/32">Cultural Heritage Commission</a></li>*/
/* 					<li><a href="{{base_path}}commissions-hearings/37">East Los Angeles</a></li>*/
/* 					<li><a href="{{base_path}}commissions-hearings/39">Harbor</a></li>*/
/* 					<li><a href="{{base_path}}commissions-hearings/33">North Valley</a></li>*/
/* 					<li><a href="{{base_path}}commissions-hearings/38">South Los Angeles</a></li>*/
/* 					<li><a href="{{base_path}}commissions-hearings/34">South Valley</a></li>*/
/* 					<li><a href="{{base_path}}commissions-hearings/35">West Los Angeles</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 			<li class="col-sm-4">*/
/* 				<ul>*/
/* 					<li class="dropdown-header"><a href="{{base_path}}news/">News</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 		</ul></li>*/
/* 	<li class="dropdown dropdown-large"><a href="#" class="dropdown-toggle"*/
/* 		data-toggle="dropdown">Location<b class="caret"></b></a>*/
/* */
/* 		<ul class="dropdown-menu dropdown-menu-large row">*/
/* 			<li class="col-sm-12 col-md-12">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Visit us</li>*/
/* 					<li><a href="#">Main office</a></li>*/
/* 					<li><a href="#">Branche Offices</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 		</ul></li>*/
/* */
/* 	<li class="dropdown dropdown-large"><a href="#" class="dropdown-toggle"*/
/* 		data-toggle="dropdown">Contact<b class="caret"></b></a>*/
/* */
/* 		<ul class="dropdown-menu dropdown-menu-large row">*/
/* 			<li class="col-sm-12 col-md-12">*/
/* 				<ul>*/
/* 					<li class="dropdown-header">Customer Serices</li>*/
/* 					<li><a href="#">Contact us</a></li>*/
/* 					<li><a href="#">Staff Directory</a></li>*/
/* 					<li><a href="#">Department List</a></li>*/
/* 					<li><a href="#">Feedback Form</a></li>*/
/* 					<li class="divider"></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 		</ul></li>*/
/* </ul>*/
