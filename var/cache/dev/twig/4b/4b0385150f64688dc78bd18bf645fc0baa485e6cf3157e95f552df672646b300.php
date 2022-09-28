<?php

/* @Admin/CtZoneDeserte/edit.html.twig */
class __TwigTemplate_094a6ca3c270bc8e6a88a949d75efce5f5cc3782a349feab88966a2504a6ee9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtZoneDeserte/edit.html.twig", 1);
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
        $__internal_1acf89b0ff35e355db16dec9e46358ea4566e8dfa28b5a55fe62fc5ef70e20b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1acf89b0ff35e355db16dec9e46358ea4566e8dfa28b5a55fe62fc5ef70e20b3->enter($__internal_1acf89b0ff35e355db16dec9e46358ea4566e8dfa28b5a55fe62fc5ef70e20b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/edit.html.twig"));

        $__internal_db96f63e9509d4846800b9ded2bd09fd2508d7738cfd055d84ddae993bfe5f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db96f63e9509d4846800b9ded2bd09fd2508d7738cfd055d84ddae993bfe5f54->enter($__internal_db96f63e9509d4846800b9ded2bd09fd2508d7738cfd055d84ddae993bfe5f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_zone_deserte"] = true;
        // line 8
        $context["menu_zone_deserte_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1acf89b0ff35e355db16dec9e46358ea4566e8dfa28b5a55fe62fc5ef70e20b3->leave($__internal_1acf89b0ff35e355db16dec9e46358ea4566e8dfa28b5a55fe62fc5ef70e20b3_prof);

        
        $__internal_db96f63e9509d4846800b9ded2bd09fd2508d7738cfd055d84ddae993bfe5f54->leave($__internal_db96f63e9509d4846800b9ded2bd09fd2508d7738cfd055d84ddae993bfe5f54_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fbf31f9460d5fcf8bf13efd183fb2c03a4426cdb0a78db69d4dd6d8e08e6ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fbf31f9460d5fcf8bf13efd183fb2c03a4426cdb0a78db69d4dd6d8e08e6ca2->enter($__internal_0fbf31f9460d5fcf8bf13efd183fb2c03a4426cdb0a78db69d4dd6d8e08e6ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e92bf96ebd200f5153caef5d424954ab37753d184863706fa2c27e3bd0382fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92bf96ebd200f5153caef5d424954ab37753d184863706fa2c27e3bd0382fdd->enter($__internal_e92bf96ebd200f5153caef5d424954ab37753d184863706fa2c27e3bd0382fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Zone de déserte ";
        
        $__internal_e92bf96ebd200f5153caef5d424954ab37753d184863706fa2c27e3bd0382fdd->leave($__internal_e92bf96ebd200f5153caef5d424954ab37753d184863706fa2c27e3bd0382fdd_prof);

        
        $__internal_0fbf31f9460d5fcf8bf13efd183fb2c03a4426cdb0a78db69d4dd6d8e08e6ca2->leave($__internal_0fbf31f9460d5fcf8bf13efd183fb2c03a4426cdb0a78db69d4dd6d8e08e6ca2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9c6cd370d5a5ff5ba69f095517725799ae317678dd754d66ce1c4f5b3e10472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c6cd370d5a5ff5ba69f095517725799ae317678dd754d66ce1c4f5b3e10472->enter($__internal_b9c6cd370d5a5ff5ba69f095517725799ae317678dd754d66ce1c4f5b3e10472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49ef4515f29c33ed2b5dc05b9bb193d73c414d506f9e14e0263283cc6cbeb90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ef4515f29c33ed2b5dc05b9bb193d73c414d506f9e14e0263283cc6cbeb90f->enter($__internal_49ef4515f29c33ed2b5dc05b9bb193d73c414d506f9e14e0263283cc6cbeb90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_49ef4515f29c33ed2b5dc05b9bb193d73c414d506f9e14e0263283cc6cbeb90f->leave($__internal_49ef4515f29c33ed2b5dc05b9bb193d73c414d506f9e14e0263283cc6cbeb90f_prof);

        
        $__internal_b9c6cd370d5a5ff5ba69f095517725799ae317678dd754d66ce1c4f5b3e10472->leave($__internal_b9c6cd370d5a5ff5ba69f095517725799ae317678dd754d66ce1c4f5b3e10472_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtZoneDeserte/edit.html.twig";
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
{% endblock %}", "@Admin/CtZoneDeserte/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtZoneDeserte\\edit.html.twig");
    }
}
