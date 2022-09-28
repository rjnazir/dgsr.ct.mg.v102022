<?php

/* AdminBundle:CtZoneDeserte:edit.html.twig */
class __TwigTemplate_b5b57f292ad8df042a761f3d050a0d5e6559e2750d982697eb0038f783ef017e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtZoneDeserte:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10a22c93bebed0d2192fe9352318d562da50de222dce0364e0e94455de5f70be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a22c93bebed0d2192fe9352318d562da50de222dce0364e0e94455de5f70be->enter($__internal_10a22c93bebed0d2192fe9352318d562da50de222dce0364e0e94455de5f70be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtZoneDeserte:edit.html.twig"));

        $__internal_cfdde06a96d86d23e2492f3b06bd445df5ef7ce15ace7ec2e7718563a57ea77d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdde06a96d86d23e2492f3b06bd445df5ef7ce15ace7ec2e7718563a57ea77d->enter($__internal_cfdde06a96d86d23e2492f3b06bd445df5ef7ce15ace7ec2e7718563a57ea77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtZoneDeserte:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_zone_deserte"] = true;
        // line 8
        $context["menu_zone_deserte_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10a22c93bebed0d2192fe9352318d562da50de222dce0364e0e94455de5f70be->leave($__internal_10a22c93bebed0d2192fe9352318d562da50de222dce0364e0e94455de5f70be_prof);

        
        $__internal_cfdde06a96d86d23e2492f3b06bd445df5ef7ce15ace7ec2e7718563a57ea77d->leave($__internal_cfdde06a96d86d23e2492f3b06bd445df5ef7ce15ace7ec2e7718563a57ea77d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85e4ec02f3aae382210ed600a3dec77668314460e3ca51255f2a5f5bae550ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e4ec02f3aae382210ed600a3dec77668314460e3ca51255f2a5f5bae550ad0->enter($__internal_85e4ec02f3aae382210ed600a3dec77668314460e3ca51255f2a5f5bae550ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f69fb34bcb7474756f98741ae5d83fa5f5e6089d039f4fc6d1792b65923cd189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69fb34bcb7474756f98741ae5d83fa5f5e6089d039f4fc6d1792b65923cd189->enter($__internal_f69fb34bcb7474756f98741ae5d83fa5f5e6089d039f4fc6d1792b65923cd189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Zone de déserte ";
        
        $__internal_f69fb34bcb7474756f98741ae5d83fa5f5e6089d039f4fc6d1792b65923cd189->leave($__internal_f69fb34bcb7474756f98741ae5d83fa5f5e6089d039f4fc6d1792b65923cd189_prof);

        
        $__internal_85e4ec02f3aae382210ed600a3dec77668314460e3ca51255f2a5f5bae550ad0->leave($__internal_85e4ec02f3aae382210ed600a3dec77668314460e3ca51255f2a5f5bae550ad0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe42ad2ece0db82124d6165f02409ba1b627a4b0c693508a3635abc9911e4202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe42ad2ece0db82124d6165f02409ba1b627a4b0c693508a3635abc9911e4202->enter($__internal_fe42ad2ece0db82124d6165f02409ba1b627a4b0c693508a3635abc9911e4202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e61ec093c606dbbec30d54d623ddc84a520b89141f082eeea2df28d146829dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61ec093c606dbbec30d54d623ddc84a520b89141f082eeea2df28d146829dcc->enter($__internal_e61ec093c606dbbec30d54d623ddc84a520b89141f082eeea2df28d146829dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une zone_deserte</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "zdLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_zone_deserte\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_e61ec093c606dbbec30d54d623ddc84a520b89141f082eeea2df28d146829dcc->leave($__internal_e61ec093c606dbbec30d54d623ddc84a520b89141f082eeea2df28d146829dcc_prof);

        
        $__internal_fe42ad2ece0db82124d6165f02409ba1b627a4b0c693508a3635abc9911e4202->leave($__internal_fe42ad2ece0db82124d6165f02409ba1b627a4b0c693508a3635abc9911e4202_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtZoneDeserte:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Zone de déserte {% endblock %}

{% set menu_zone_deserte        = true %}
{% set menu_zone_deserte_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une zone_deserte</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.zdLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_zone_deserte\"/>
                        <a href=\"{{ path('zone_deserte_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtZoneDeserte:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtZoneDeserte/edit.html.twig");
    }
}
