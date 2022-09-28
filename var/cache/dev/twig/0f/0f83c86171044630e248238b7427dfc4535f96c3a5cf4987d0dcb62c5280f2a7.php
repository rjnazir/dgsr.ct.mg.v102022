<?php

/* AdminBundle:CtAnomalie:add.html.twig */
class __TwigTemplate_97bfe8451f42ffc3f73df4db85c3b577ee404625987a8a65ed9649127d19ee73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtAnomalie:add.html.twig", 1);
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
        $__internal_70049b3adbab3db6764afec399e80ab935e3d39fc5485cd048a0c403e2820075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70049b3adbab3db6764afec399e80ab935e3d39fc5485cd048a0c403e2820075->enter($__internal_70049b3adbab3db6764afec399e80ab935e3d39fc5485cd048a0c403e2820075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtAnomalie:add.html.twig"));

        $__internal_e9a683b7db4f88b06fd7606e65a9d2e6de53159db2b6ab893f36e15126c1cd64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a683b7db4f88b06fd7606e65a9d2e6de53159db2b6ab893f36e15126c1cd64->enter($__internal_e9a683b7db4f88b06fd7606e65a9d2e6de53159db2b6ab893f36e15126c1cd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtAnomalie:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70049b3adbab3db6764afec399e80ab935e3d39fc5485cd048a0c403e2820075->leave($__internal_70049b3adbab3db6764afec399e80ab935e3d39fc5485cd048a0c403e2820075_prof);

        
        $__internal_e9a683b7db4f88b06fd7606e65a9d2e6de53159db2b6ab893f36e15126c1cd64->leave($__internal_e9a683b7db4f88b06fd7606e65a9d2e6de53159db2b6ab893f36e15126c1cd64_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4494538aea1f733e8df443d653468f71f1fb48e730a9eece4231d7d3f3d11456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4494538aea1f733e8df443d653468f71f1fb48e730a9eece4231d7d3f3d11456->enter($__internal_4494538aea1f733e8df443d653468f71f1fb48e730a9eece4231d7d3f3d11456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c2dfa1758bb3424a575a99b8c9701349656fa53c8d68bc1725108559cccfe68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2dfa1758bb3424a575a99b8c9701349656fa53c8d68bc1725108559cccfe68->enter($__internal_6c2dfa1758bb3424a575a99b8c9701349656fa53c8d68bc1725108559cccfe68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Anomalie ";
        
        $__internal_6c2dfa1758bb3424a575a99b8c9701349656fa53c8d68bc1725108559cccfe68->leave($__internal_6c2dfa1758bb3424a575a99b8c9701349656fa53c8d68bc1725108559cccfe68_prof);

        
        $__internal_4494538aea1f733e8df443d653468f71f1fb48e730a9eece4231d7d3f3d11456->leave($__internal_4494538aea1f733e8df443d653468f71f1fb48e730a9eece4231d7d3f3d11456_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_23e573d9ff7018a4a3db58bc59336fdec50b154410d9dbd1b61601c8c6bcd09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e573d9ff7018a4a3db58bc59336fdec50b154410d9dbd1b61601c8c6bcd09a->enter($__internal_23e573d9ff7018a4a3db58bc59336fdec50b154410d9dbd1b61601c8c6bcd09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f44875cc820b274c414d72500c420d1f2354be4ca0bb1741bc955cd4dfe928f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f44875cc820b274c414d72500c420d1f2354be4ca0bb1741bc955cd4dfe928f->enter($__internal_5f44875cc820b274c414d72500c420d1f2354be4ca0bb1741bc955cd4dfe928f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctAnomalieType", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "anmlLibelle", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "anmlCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_anomalie\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_5f44875cc820b274c414d72500c420d1f2354be4ca0bb1741bc955cd4dfe928f->leave($__internal_5f44875cc820b274c414d72500c420d1f2354be4ca0bb1741bc955cd4dfe928f_prof);

        
        $__internal_23e573d9ff7018a4a3db58bc59336fdec50b154410d9dbd1b61601c8c6bcd09a->leave($__internal_23e573d9ff7018a4a3db58bc59336fdec50b154410d9dbd1b61601c8c6bcd09a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtAnomalie:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  141 => 38,  133 => 33,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Anomalie {% endblock %}

{% set menu_anomalie        = true %}
{% set menu_anomalie_create = true %}

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
                        <h3 class=\"box-title\">Créer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.ctAnomalieType) }}
                        {{ form_row(form.anmlLibelle) }}
                        {{ form_row(form.anmlCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_anomalie\"/>
                        <a href=\"{{ path('anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtAnomalie:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtAnomalie/add.html.twig");
    }
}
