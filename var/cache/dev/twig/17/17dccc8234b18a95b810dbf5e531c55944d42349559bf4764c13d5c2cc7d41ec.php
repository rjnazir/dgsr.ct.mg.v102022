<?php

/* AdminBundle:CtTypeReception:add.html.twig */
class __TwigTemplate_dc3ef5784280cb68c63a69f6af16c7029870c144b1ec882316c2cf0c2d0834bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeReception:add.html.twig", 1);
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
        $__internal_0006459299c11500de61dcaae8b0e943da9fdd6ac31aa8911ff8c81da06f5fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0006459299c11500de61dcaae8b0e943da9fdd6ac31aa8911ff8c81da06f5fc8->enter($__internal_0006459299c11500de61dcaae8b0e943da9fdd6ac31aa8911ff8c81da06f5fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:add.html.twig"));

        $__internal_6d683f547d09ab49f70ae6f4633e38e3ab930c5d5136cad431d2aacf1fb5413f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d683f547d09ab49f70ae6f4633e38e3ab930c5d5136cad431d2aacf1fb5413f->enter($__internal_6d683f547d09ab49f70ae6f4633e38e3ab930c5d5136cad431d2aacf1fb5413f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_reception"] = true;
        // line 8
        $context["menu_type_reception"] = true;
        // line 9
        $context["menu_type_reception_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0006459299c11500de61dcaae8b0e943da9fdd6ac31aa8911ff8c81da06f5fc8->leave($__internal_0006459299c11500de61dcaae8b0e943da9fdd6ac31aa8911ff8c81da06f5fc8_prof);

        
        $__internal_6d683f547d09ab49f70ae6f4633e38e3ab930c5d5136cad431d2aacf1fb5413f->leave($__internal_6d683f547d09ab49f70ae6f4633e38e3ab930c5d5136cad431d2aacf1fb5413f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3f72d6d96b4c11eecdaea75cba6c98cc8db82eede8342d4634025cfa92eaf3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f72d6d96b4c11eecdaea75cba6c98cc8db82eede8342d4634025cfa92eaf3e->enter($__internal_f3f72d6d96b4c11eecdaea75cba6c98cc8db82eede8342d4634025cfa92eaf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0743da13135eb02d6e505586dc83c09391fabd70405d8cfd65744991c53d6732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0743da13135eb02d6e505586dc83c09391fabd70405d8cfd65744991c53d6732->enter($__internal_0743da13135eb02d6e505586dc83c09391fabd70405d8cfd65744991c53d6732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de réception ";
        
        $__internal_0743da13135eb02d6e505586dc83c09391fabd70405d8cfd65744991c53d6732->leave($__internal_0743da13135eb02d6e505586dc83c09391fabd70405d8cfd65744991c53d6732_prof);

        
        $__internal_f3f72d6d96b4c11eecdaea75cba6c98cc8db82eede8342d4634025cfa92eaf3e->leave($__internal_f3f72d6d96b4c11eecdaea75cba6c98cc8db82eede8342d4634025cfa92eaf3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_34a26310abd509f0645690b195ded5ec806c619b5f5972692f4e3ecb788264f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a26310abd509f0645690b195ded5ec806c619b5f5972692f4e3ecb788264f2->enter($__internal_34a26310abd509f0645690b195ded5ec806c619b5f5972692f4e3ecb788264f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbdd807029cf7801ee69a70bd7816f213a031838753cea07fdcb8f7800a2df10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdd807029cf7801ee69a70bd7816f213a031838753cea07fdcb8f7800a2df10->enter($__internal_bbdd807029cf7801ee69a70bd7816f213a031838753cea07fdcb8f7800a2df10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tprcpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_index");
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
        
        $__internal_bbdd807029cf7801ee69a70bd7816f213a031838753cea07fdcb8f7800a2df10->leave($__internal_bbdd807029cf7801ee69a70bd7816f213a031838753cea07fdcb8f7800a2df10_prof);

        
        $__internal_34a26310abd509f0645690b195ded5ec806c619b5f5972692f4e3ecb788264f2->leave($__internal_34a26310abd509f0645690b195ded5ec806c619b5f5972692f4e3ecb788264f2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeReception:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Type de réception {% endblock %}

{% set menu_reception        = true %}
{% set menu_type_reception        = true %}
{% set menu_type_reception_create = true %}

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
                        <h3 class=\"box-title\">Créer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.tprcpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                        <a href=\"{{ path('type_reception_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeReception:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeReception/add.html.twig");
    }
}
