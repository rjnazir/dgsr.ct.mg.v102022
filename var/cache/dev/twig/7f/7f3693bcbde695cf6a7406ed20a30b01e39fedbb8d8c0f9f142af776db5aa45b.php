<?php

/* AdminBundle:CtImprimeTech:add.html.twig */
class __TwigTemplate_08ba6f0a57b3da86f85465baa49ea9a36430e08f7a30ede668e5a1bcf4697091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtImprimeTech:add.html.twig", 1);
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
        $__internal_ae8bccabf307efc20837f359d9c7f6311778b37df963f7aad3322e3446404cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8bccabf307efc20837f359d9c7f6311778b37df963f7aad3322e3446404cb8->enter($__internal_ae8bccabf307efc20837f359d9c7f6311778b37df963f7aad3322e3446404cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTech:add.html.twig"));

        $__internal_e9d046fed971c78ce612f31dfe2c2f8b344a34e301550ed5856291846af31471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d046fed971c78ce612f31dfe2c2f8b344a34e301550ed5856291846af31471->enter($__internal_e9d046fed971c78ce612f31dfe2c2f8b344a34e301550ed5856291846af31471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTech:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_imprime_tech"] = true;
        // line 8
        $context["menu_imprime_tech_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae8bccabf307efc20837f359d9c7f6311778b37df963f7aad3322e3446404cb8->leave($__internal_ae8bccabf307efc20837f359d9c7f6311778b37df963f7aad3322e3446404cb8_prof);

        
        $__internal_e9d046fed971c78ce612f31dfe2c2f8b344a34e301550ed5856291846af31471->leave($__internal_e9d046fed971c78ce612f31dfe2c2f8b344a34e301550ed5856291846af31471_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d634a6fa889d65343d43c4b25183d3334e30894681752b3d12a3aa5057d7a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d634a6fa889d65343d43c4b25183d3334e30894681752b3d12a3aa5057d7a52->enter($__internal_0d634a6fa889d65343d43c4b25183d3334e30894681752b3d12a3aa5057d7a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11c1c14ce93449dd1d1307f96eb44ec8a25e1dbe8e30a1a2f2fb0e4de481dd77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c1c14ce93449dd1d1307f96eb44ec8a25e1dbe8e30a1a2f2fb0e4de481dd77->enter($__internal_11c1c14ce93449dd1d1307f96eb44ec8a25e1dbe8e30a1a2f2fb0e4de481dd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_11c1c14ce93449dd1d1307f96eb44ec8a25e1dbe8e30a1a2f2fb0e4de481dd77->leave($__internal_11c1c14ce93449dd1d1307f96eb44ec8a25e1dbe8e30a1a2f2fb0e4de481dd77_prof);

        
        $__internal_0d634a6fa889d65343d43c4b25183d3334e30894681752b3d12a3aa5057d7a52->leave($__internal_0d634a6fa889d65343d43c4b25183d3334e30894681752b3d12a3aa5057d7a52_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_70bd7ffc745b2a48ede063f30fdf1a3c7a833e7c4c896878ff52a84f47d28f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70bd7ffc745b2a48ede063f30fdf1a3c7a833e7c4c896878ff52a84f47d28f0e->enter($__internal_70bd7ffc745b2a48ede063f30fdf1a3c7a833e7c4c896878ff52a84f47d28f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e89d23ac8aeedb7ad7847b86f7684536f42db8dd8634895dca95947f819ae14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e89d23ac8aeedb7ad7847b86f7684536f42db8dd8634895dca95947f819ae14->enter($__internal_9e89d23ac8aeedb7ad7847b86f7684536f42db8dd8634895dca95947f819ae14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "abrevImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "uteImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_imprime_tech\"/>
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_9e89d23ac8aeedb7ad7847b86f7684536f42db8dd8634895dca95947f819ae14->leave($__internal_9e89d23ac8aeedb7ad7847b86f7684536f42db8dd8634895dca95947f819ae14_prof);

        
        $__internal_70bd7ffc745b2a48ede063f30fdf1a3c7a833e7c4c896878ff52a84f47d28f0e->leave($__internal_70bd7ffc745b2a48ede063f30fdf1a3c7a833e7c4c896878ff52a84f47d28f0e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtImprimeTech:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 49,  147 => 44,  139 => 39,  132 => 35,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Catégorie {% endblock %}

{% set menu_imprime_tech        = true %}
{% set menu_imprime_tech_create = true %}

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
                        <h3 class=\"box-title\">Créer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.nomImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.abrevImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.uteImprimeTech) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_imprime_tech\"/>
                        <a href=\"{{ path('imprime_tech_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtImprimeTech:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtImprimeTech/add.html.twig");
    }
}
