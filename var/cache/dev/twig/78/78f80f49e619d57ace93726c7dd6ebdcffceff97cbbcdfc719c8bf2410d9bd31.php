<?php

/* @Admin/CtTypeVisite/edit.html.twig */
class __TwigTemplate_eabc1eed81e93ee570099e854177c4ad96fbc70495a45a1455618efc0bb90551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeVisite/edit.html.twig", 1);
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
        $__internal_d5a930a5c2991f9bc3cfc3b91bad943bdede50ba8b8814dca6ae66539428b2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a930a5c2991f9bc3cfc3b91bad943bdede50ba8b8814dca6ae66539428b2d6->enter($__internal_d5a930a5c2991f9bc3cfc3b91bad943bdede50ba8b8814dca6ae66539428b2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeVisite/edit.html.twig"));

        $__internal_cdb1d59de5e99915a70e515f679744806001fd8f628160410c2fd6591dd1d43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb1d59de5e99915a70e515f679744806001fd8f628160410c2fd6591dd1d43e->enter($__internal_cdb1d59de5e99915a70e515f679744806001fd8f628160410c2fd6591dd1d43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeVisite/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite"] = true;
        // line 8
        $context["menu_type_visite"] = true;
        // line 9
        $context["menu_type_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5a930a5c2991f9bc3cfc3b91bad943bdede50ba8b8814dca6ae66539428b2d6->leave($__internal_d5a930a5c2991f9bc3cfc3b91bad943bdede50ba8b8814dca6ae66539428b2d6_prof);

        
        $__internal_cdb1d59de5e99915a70e515f679744806001fd8f628160410c2fd6591dd1d43e->leave($__internal_cdb1d59de5e99915a70e515f679744806001fd8f628160410c2fd6591dd1d43e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d787fdc91c5aa906ab90cf3fba4d4dff649fc8f6d7de9900160d0ab445f28b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d787fdc91c5aa906ab90cf3fba4d4dff649fc8f6d7de9900160d0ab445f28b3a->enter($__internal_d787fdc91c5aa906ab90cf3fba4d4dff649fc8f6d7de9900160d0ab445f28b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_684c70b9430e606d3d1956a2ad0183787afdf11525fdb4215a5b7b73d2c63d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684c70b9430e606d3d1956a2ad0183787afdf11525fdb4215a5b7b73d2c63d0f->enter($__internal_684c70b9430e606d3d1956a2ad0183787afdf11525fdb4215a5b7b73d2c63d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de visite ";
        
        $__internal_684c70b9430e606d3d1956a2ad0183787afdf11525fdb4215a5b7b73d2c63d0f->leave($__internal_684c70b9430e606d3d1956a2ad0183787afdf11525fdb4215a5b7b73d2c63d0f_prof);

        
        $__internal_d787fdc91c5aa906ab90cf3fba4d4dff649fc8f6d7de9900160d0ab445f28b3a->leave($__internal_d787fdc91c5aa906ab90cf3fba4d4dff649fc8f6d7de9900160d0ab445f28b3a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bd277615eb34e901f08a44e5d5ecc8a42d7f91f3d59106a18d0967b1f9e35e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd277615eb34e901f08a44e5d5ecc8a42d7f91f3d59106a18d0967b1f9e35e5->enter($__internal_7bd277615eb34e901f08a44e5d5ecc8a42d7f91f3d59106a18d0967b1f9e35e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a7f01db5684ddbad2aad800fced387b9b97d5690e208076e40a98483beae8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7f01db5684ddbad2aad800fced387b9b97d5690e208076e40a98483beae8e4->enter($__internal_7a7f01db5684ddbad2aad800fced387b9b97d5690e208076e40a98483beae8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tpvLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_visite\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_7a7f01db5684ddbad2aad800fced387b9b97d5690e208076e40a98483beae8e4->leave($__internal_7a7f01db5684ddbad2aad800fced387b9b97d5690e208076e40a98483beae8e4_prof);

        
        $__internal_7bd277615eb34e901f08a44e5d5ecc8a42d7f91f3d59106a18d0967b1f9e35e5->leave($__internal_7bd277615eb34e901f08a44e5d5ecc8a42d7f91f3d59106a18d0967b1f9e35e5_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeVisite/edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Type de visite {% endblock %}

{% set menu_visite             = true %}
{% set menu_type_visite        = true %}
{% set menu_type_visite_create = true %}

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
                        <h3 class=\"box-title\">Editer une type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tpvLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_visite\"/>
                        <a href=\"{{ path('type_visite_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeVisite/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeVisite\\edit.html.twig");
    }
}
