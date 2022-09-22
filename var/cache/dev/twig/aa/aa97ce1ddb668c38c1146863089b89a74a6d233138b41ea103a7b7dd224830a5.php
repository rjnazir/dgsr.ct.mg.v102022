<?php

/* AdminBundle:CtCentre:add.html.twig */
class __TwigTemplate_9980684897bbf5cf30b9e2ae5c2dd992c62a6149c5808ddd241b75383ae71f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCentre:add.html.twig", 1);
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
        $__internal_cd3671f47eaa4ec424f0438406ec035cce0b5e70dcf8b0b194943f24da89266e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3671f47eaa4ec424f0438406ec035cce0b5e70dcf8b0b194943f24da89266e->enter($__internal_cd3671f47eaa4ec424f0438406ec035cce0b5e70dcf8b0b194943f24da89266e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:add.html.twig"));

        $__internal_82c9acdc507bac71115bc1455baa2105d49824acf6b585d1c3349fb8f9ce977d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c9acdc507bac71115bc1455baa2105d49824acf6b585d1c3349fb8f9ce977d->enter($__internal_82c9acdc507bac71115bc1455baa2105d49824acf6b585d1c3349fb8f9ce977d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_centre"] = true;
        // line 8
        $context["menu_centre_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd3671f47eaa4ec424f0438406ec035cce0b5e70dcf8b0b194943f24da89266e->leave($__internal_cd3671f47eaa4ec424f0438406ec035cce0b5e70dcf8b0b194943f24da89266e_prof);

        
        $__internal_82c9acdc507bac71115bc1455baa2105d49824acf6b585d1c3349fb8f9ce977d->leave($__internal_82c9acdc507bac71115bc1455baa2105d49824acf6b585d1c3349fb8f9ce977d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2828ced2e1d0ced7c6e89089afa56286da316a0f20c339d9c470a312134429ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2828ced2e1d0ced7c6e89089afa56286da316a0f20c339d9c470a312134429ab->enter($__internal_2828ced2e1d0ced7c6e89089afa56286da316a0f20c339d9c470a312134429ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16bbdf9b816a01ec2ad2b3fb73d1418b903d1f814face861ad362291c38892df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16bbdf9b816a01ec2ad2b3fb73d1418b903d1f814face861ad362291c38892df->enter($__internal_16bbdf9b816a01ec2ad2b3fb73d1418b903d1f814face861ad362291c38892df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Centre ";
        
        $__internal_16bbdf9b816a01ec2ad2b3fb73d1418b903d1f814face861ad362291c38892df->leave($__internal_16bbdf9b816a01ec2ad2b3fb73d1418b903d1f814face861ad362291c38892df_prof);

        
        $__internal_2828ced2e1d0ced7c6e89089afa56286da316a0f20c339d9c470a312134429ab->leave($__internal_2828ced2e1d0ced7c6e89089afa56286da316a0f20c339d9c470a312134429ab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa9de78efbbe270f35360d3837c21f07eef58b2adcd82198f3aa7f9e8d51772d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9de78efbbe270f35360d3837c21f07eef58b2adcd82198f3aa7f9e8d51772d->enter($__internal_aa9de78efbbe270f35360d3837c21f07eef58b2adcd82198f3aa7f9e8d51772d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62f9d18959c9be8e5991cbb37919ccd17e0032fc91fd9fd2689006f4e54a48d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f9d18959c9be8e5991cbb37919ccd17e0032fc91fd9fd2689006f4e54a48d0->enter($__internal_62f9d18959c9be8e5991cbb37919ccd17e0032fc91fd9fd2689006f4e54a48d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un centre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctProvince", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctrNom", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctrCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_centre\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
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
        
        $__internal_62f9d18959c9be8e5991cbb37919ccd17e0032fc91fd9fd2689006f4e54a48d0->leave($__internal_62f9d18959c9be8e5991cbb37919ccd17e0032fc91fd9fd2689006f4e54a48d0_prof);

        
        $__internal_aa9de78efbbe270f35360d3837c21f07eef58b2adcd82198f3aa7f9e8d51772d->leave($__internal_aa9de78efbbe270f35360d3837c21f07eef58b2adcd82198f3aa7f9e8d51772d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCentre:add.html.twig";
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

{% block title %}{{ parent() }} Ajout Centre {% endblock %}

{% set menu_centre        = true %}
{% set menu_centre_create = true %}

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
                        <h3 class=\"box-title\">Créer un centre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctProvince) }}
                        {{ form_row(form.ctrNom) }}
                        {{ form_row(form.ctrCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_centre\"/>
                        <a href=\"{{ path('centre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtCentre:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCentre/add.html.twig");
    }
}
