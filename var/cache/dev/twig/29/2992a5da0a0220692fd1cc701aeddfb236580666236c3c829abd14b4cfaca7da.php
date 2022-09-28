<?php

/* AdminBundle:CtRole:add.html.twig */
class __TwigTemplate_74881c3deff01622a745954f4bc559455136bdbe9dbb1ebe2bd213fa88bd2176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtRole:add.html.twig", 1);
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
        $__internal_08ddd2e40534236703298ace2fde7076948cdee6efc85386e9f604dfab391439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ddd2e40534236703298ace2fde7076948cdee6efc85386e9f604dfab391439->enter($__internal_08ddd2e40534236703298ace2fde7076948cdee6efc85386e9f604dfab391439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:add.html.twig"));

        $__internal_92ed8e79fdb4e3a35aef65f32afd241d30680ce1b677fb659423613e4ca7a7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ed8e79fdb4e3a35aef65f32afd241d30680ce1b677fb659423613e4ca7a7f0->enter($__internal_92ed8e79fdb4e3a35aef65f32afd241d30680ce1b677fb659423613e4ca7a7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_role"] = true;
        // line 8
        $context["menu_role_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08ddd2e40534236703298ace2fde7076948cdee6efc85386e9f604dfab391439->leave($__internal_08ddd2e40534236703298ace2fde7076948cdee6efc85386e9f604dfab391439_prof);

        
        $__internal_92ed8e79fdb4e3a35aef65f32afd241d30680ce1b677fb659423613e4ca7a7f0->leave($__internal_92ed8e79fdb4e3a35aef65f32afd241d30680ce1b677fb659423613e4ca7a7f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_06093548cf1f52b0cab035dbca5d2db5fe21e1ca44e303a12e92f579265700b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06093548cf1f52b0cab035dbca5d2db5fe21e1ca44e303a12e92f579265700b9->enter($__internal_06093548cf1f52b0cab035dbca5d2db5fe21e1ca44e303a12e92f579265700b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c64bfe85912cc84763dcb80e817e328e581f31745c39242f553b8f79d1735311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64bfe85912cc84763dcb80e817e328e581f31745c39242f553b8f79d1735311->enter($__internal_c64bfe85912cc84763dcb80e817e328e581f31745c39242f553b8f79d1735311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Rôle ";
        
        $__internal_c64bfe85912cc84763dcb80e817e328e581f31745c39242f553b8f79d1735311->leave($__internal_c64bfe85912cc84763dcb80e817e328e581f31745c39242f553b8f79d1735311_prof);

        
        $__internal_06093548cf1f52b0cab035dbca5d2db5fe21e1ca44e303a12e92f579265700b9->leave($__internal_06093548cf1f52b0cab035dbca5d2db5fe21e1ca44e303a12e92f579265700b9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8add2a6aabbc43978323ab60fc98d23794179a39f9ac735dddb173a4d4386fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8add2a6aabbc43978323ab60fc98d23794179a39f9ac735dddb173a4d4386fd3->enter($__internal_8add2a6aabbc43978323ab60fc98d23794179a39f9ac735dddb173a4d4386fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8da884302fec52bb5025085472bef38d7e40b71cd89977e9cef7d1df9b59f4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da884302fec52bb5025085472bef38d7e40b71cd89977e9cef7d1df9b59f4fb->enter($__internal_8da884302fec52bb5025085472bef38d7e40b71cd89977e9cef7d1df9b59f4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un rôle</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roleName", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_role\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_8da884302fec52bb5025085472bef38d7e40b71cd89977e9cef7d1df9b59f4fb->leave($__internal_8da884302fec52bb5025085472bef38d7e40b71cd89977e9cef7d1df9b59f4fb_prof);

        
        $__internal_8add2a6aabbc43978323ab60fc98d23794179a39f9ac735dddb173a4d4386fd3->leave($__internal_8add2a6aabbc43978323ab60fc98d23794179a39f9ac735dddb173a4d4386fd3_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtRole:add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Rôle {% endblock %}

{% set menu_role        = true %}
{% set menu_role_create = true %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un rôle</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.roleName) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_role\"/>
                        <a href=\"{{ path('role_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtRole:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtRole/add.html.twig");
    }
}
