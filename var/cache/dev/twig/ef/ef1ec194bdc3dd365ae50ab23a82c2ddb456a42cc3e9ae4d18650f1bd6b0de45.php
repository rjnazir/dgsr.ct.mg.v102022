<?php

/* AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig */
class __TwigTemplate_77e6925a5aeda02ad69ab598d1b74484d4473f9517bfd1541296098a357e7c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig", 1);
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
        $__internal_81631bc7278ab638176982f679a8b2018fa478d28f9cc1d1969aefc9dc014a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81631bc7278ab638176982f679a8b2018fa478d28f9cc1d1969aefc9dc014a61->enter($__internal_81631bc7278ab638176982f679a8b2018fa478d28f9cc1d1969aefc9dc014a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig"));

        $__internal_10f1a91d9f3f3006552714ac1bc9189b1e0250b6b32565b7e9b4f91040fe17b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f1a91d9f3f3006552714ac1bc9189b1e0250b6b32565b7e9b4f91040fe17b0->enter($__internal_10f1a91d9f3f3006552714ac1bc9189b1e0250b6b32565b7e9b4f91040fe17b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81631bc7278ab638176982f679a8b2018fa478d28f9cc1d1969aefc9dc014a61->leave($__internal_81631bc7278ab638176982f679a8b2018fa478d28f9cc1d1969aefc9dc014a61_prof);

        
        $__internal_10f1a91d9f3f3006552714ac1bc9189b1e0250b6b32565b7e9b4f91040fe17b0->leave($__internal_10f1a91d9f3f3006552714ac1bc9189b1e0250b6b32565b7e9b4f91040fe17b0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e88f205d600b8e24b6b3511d59b758cf48432d8b44236d5d74d6bb74ff4ebeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e88f205d600b8e24b6b3511d59b758cf48432d8b44236d5d74d6bb74ff4ebeb->enter($__internal_3e88f205d600b8e24b6b3511d59b758cf48432d8b44236d5d74d6bb74ff4ebeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a72ed46b4126f5bf347695f2ab6caa35485fee1d0b08a560e56800f27252402c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72ed46b4126f5bf347695f2ab6caa35485fee1d0b08a560e56800f27252402c->enter($__internal_a72ed46b4126f5bf347695f2ab6caa35485fee1d0b08a560e56800f27252402c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_a72ed46b4126f5bf347695f2ab6caa35485fee1d0b08a560e56800f27252402c->leave($__internal_a72ed46b4126f5bf347695f2ab6caa35485fee1d0b08a560e56800f27252402c_prof);

        
        $__internal_3e88f205d600b8e24b6b3511d59b758cf48432d8b44236d5d74d6bb74ff4ebeb->leave($__internal_3e88f205d600b8e24b6b3511d59b758cf48432d8b44236d5d74d6bb74ff4ebeb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_726f87f54ab910bd874e27461013ada083427f56dc0a5b5ae43beb365661ff30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726f87f54ab910bd874e27461013ada083427f56dc0a5b5ae43beb365661ff30->enter($__internal_726f87f54ab910bd874e27461013ada083427f56dc0a5b5ae43beb365661ff30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5f950a91d180b63927c6717606471d178902921916d5790c643481373442954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f950a91d180b63927c6717606471d178902921916d5790c643481373442954->enter($__internal_f5f950a91d180b63927c6717606471d178902921916d5790c643481373442954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Créer une constatation avant dedouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctConstAvDedType", array()), 'row');
        echo "
                    ";
        // line 33
        echo "                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_carac_index");
        echo "\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_f5f950a91d180b63927c6717606471d178902921916d5790c643481373442954->leave($__internal_f5f950a91d180b63927c6717606471d178902921916d5790c643481373442954_prof);

        
        $__internal_726f87f54ab910bd874e27461013ada083427f56dc0a5b5ae43beb365661ff30->leave($__internal_726f87f54ab910bd874e27461013ada083427f56dc0a5b5ae43beb365661ff30_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  129 => 33,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout motif {% endblock %}

{% set menu_const_av_ded                = true %}
{% set menu_const_av_ded_type_create    = true %}

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
                    <h3 class=\"box-title\">Créer une constatation avant dedouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.ctConstAvDedType) }}
                    {#{{ form_row(form.ctConstAvDed.ctVerificateur) }}#}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                    <a href=\"{{ path('const_av_ded_carac_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtConstatationAvDedouanementCarac/add.html.twig");
    }
}
