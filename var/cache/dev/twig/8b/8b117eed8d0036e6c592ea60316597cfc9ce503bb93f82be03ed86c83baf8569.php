<?php

/* AdminBundle:CtImprimeTech:edit.html.twig */
class __TwigTemplate_b074f89a330ca1347f822407432fedc9c81e602f9ecc339ccfb33f528d17c315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtImprimeTech:edit.html.twig", 1);
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
        $__internal_02235e8e841bf60ce164fcaaceaa234fa0374e26508f4b4b47c814488d1d13a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02235e8e841bf60ce164fcaaceaa234fa0374e26508f4b4b47c814488d1d13a1->enter($__internal_02235e8e841bf60ce164fcaaceaa234fa0374e26508f4b4b47c814488d1d13a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTech:edit.html.twig"));

        $__internal_ee4a188666fb82fdb13e40a10fff865e3be581a741311e454faa19c74ca42cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4a188666fb82fdb13e40a10fff865e3be581a741311e454faa19c74ca42cde->enter($__internal_ee4a188666fb82fdb13e40a10fff865e3be581a741311e454faa19c74ca42cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTech:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_imprime_tech"] = true;
        // line 8
        $context["menu_imprime_tech_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02235e8e841bf60ce164fcaaceaa234fa0374e26508f4b4b47c814488d1d13a1->leave($__internal_02235e8e841bf60ce164fcaaceaa234fa0374e26508f4b4b47c814488d1d13a1_prof);

        
        $__internal_ee4a188666fb82fdb13e40a10fff865e3be581a741311e454faa19c74ca42cde->leave($__internal_ee4a188666fb82fdb13e40a10fff865e3be581a741311e454faa19c74ca42cde_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_561fcd2afa8ac40ef89ea4c3fd70e8ff6721133d61d8075d02ec6aa76a10a508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561fcd2afa8ac40ef89ea4c3fd70e8ff6721133d61d8075d02ec6aa76a10a508->enter($__internal_561fcd2afa8ac40ef89ea4c3fd70e8ff6721133d61d8075d02ec6aa76a10a508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea70242129a260e408a2feffc4a910b148bb76df71ccc6162a83c6b494516e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea70242129a260e408a2feffc4a910b148bb76df71ccc6162a83c6b494516e1c->enter($__internal_ea70242129a260e408a2feffc4a910b148bb76df71ccc6162a83c6b494516e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification imprimé technique ";
        
        $__internal_ea70242129a260e408a2feffc4a910b148bb76df71ccc6162a83c6b494516e1c->leave($__internal_ea70242129a260e408a2feffc4a910b148bb76df71ccc6162a83c6b494516e1c_prof);

        
        $__internal_561fcd2afa8ac40ef89ea4c3fd70e8ff6721133d61d8075d02ec6aa76a10a508->leave($__internal_561fcd2afa8ac40ef89ea4c3fd70e8ff6721133d61d8075d02ec6aa76a10a508_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b401d2eb5073d425a6fd3733f764313df5ff93b972ab03b0157d12c010a0a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b401d2eb5073d425a6fd3733f764313df5ff93b972ab03b0157d12c010a0a7d->enter($__internal_6b401d2eb5073d425a6fd3733f764313df5ff93b972ab03b0157d12c010a0a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd1941570d71020a2c5b3b459d83769525a45a468f521d018ab9f31b2544b7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1941570d71020a2c5b3b459d83769525a45a468f521d018ab9f31b2544b7c2->enter($__internal_cd1941570d71020a2c5b3b459d83769525a45a468f521d018ab9f31b2544b7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nomImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "abrevImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "uteImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_imprime_tech\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_cd1941570d71020a2c5b3b459d83769525a45a468f521d018ab9f31b2544b7c2->leave($__internal_cd1941570d71020a2c5b3b459d83769525a45a468f521d018ab9f31b2544b7c2_prof);

        
        $__internal_6b401d2eb5073d425a6fd3733f764313df5ff93b972ab03b0157d12c010a0a7d->leave($__internal_6b401d2eb5073d425a6fd3733f764313df5ff93b972ab03b0157d12c010a0a7d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtImprimeTech:edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification imprimé technique {% endblock %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.nomImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.abrevImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.uteImprimeTech) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_imprime_tech\"/>
                        <a href=\"{{ path('imprime_tech_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtImprimeTech:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtImprimeTech/edit.html.twig");
    }
}
