<?php

/* @Admin/CtRole/edit.html.twig */
class __TwigTemplate_afa51ef94419fe71f8afb7bd3ccc7903b2112bee5b26f0eb56b5c66d977e65f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtRole/edit.html.twig", 1);
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
        $__internal_14ded33d7d673f1e9cfd4422fe57e8464754c5836335f5ded80d46c450b8a019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ded33d7d673f1e9cfd4422fe57e8464754c5836335f5ded80d46c450b8a019->enter($__internal_14ded33d7d673f1e9cfd4422fe57e8464754c5836335f5ded80d46c450b8a019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtRole/edit.html.twig"));

        $__internal_54ba37b2b5cc5503d9f450044cd50750d7838eb375f8cb6fd73055fe4a2d57f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ba37b2b5cc5503d9f450044cd50750d7838eb375f8cb6fd73055fe4a2d57f4->enter($__internal_54ba37b2b5cc5503d9f450044cd50750d7838eb375f8cb6fd73055fe4a2d57f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtRole/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_role"] = true;
        // line 8
        $context["menu_role_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14ded33d7d673f1e9cfd4422fe57e8464754c5836335f5ded80d46c450b8a019->leave($__internal_14ded33d7d673f1e9cfd4422fe57e8464754c5836335f5ded80d46c450b8a019_prof);

        
        $__internal_54ba37b2b5cc5503d9f450044cd50750d7838eb375f8cb6fd73055fe4a2d57f4->leave($__internal_54ba37b2b5cc5503d9f450044cd50750d7838eb375f8cb6fd73055fe4a2d57f4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_96883ff09247131f35450e590a751755589904d91817c0285dcdcdb1f6143ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96883ff09247131f35450e590a751755589904d91817c0285dcdcdb1f6143ccc->enter($__internal_96883ff09247131f35450e590a751755589904d91817c0285dcdcdb1f6143ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ada7e025e2b38e0515612f8ef6a791139ac43d0ed309b50afea537ebb7224e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada7e025e2b38e0515612f8ef6a791139ac43d0ed309b50afea537ebb7224e98->enter($__internal_ada7e025e2b38e0515612f8ef6a791139ac43d0ed309b50afea537ebb7224e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Catégorie ";
        
        $__internal_ada7e025e2b38e0515612f8ef6a791139ac43d0ed309b50afea537ebb7224e98->leave($__internal_ada7e025e2b38e0515612f8ef6a791139ac43d0ed309b50afea537ebb7224e98_prof);

        
        $__internal_96883ff09247131f35450e590a751755589904d91817c0285dcdcdb1f6143ccc->leave($__internal_96883ff09247131f35450e590a751755589904d91817c0285dcdcdb1f6143ccc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1051d7c7392bfd7793f8193a499ca9ab227938f49e6201eb3f07ef60126177d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1051d7c7392bfd7793f8193a499ca9ab227938f49e6201eb3f07ef60126177d3->enter($__internal_1051d7c7392bfd7793f8193a499ca9ab227938f49e6201eb3f07ef60126177d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea80072585a8ecefe81c695f7008ec4a3fc3bc2570135f3ee9bde0aa10b54261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea80072585a8ecefe81c695f7008ec4a3fc3bc2570135f3ee9bde0aa10b54261->enter($__internal_ea80072585a8ecefe81c695f7008ec4a3fc3bc2570135f3ee9bde0aa10b54261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un rôle</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "roleName", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_role\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_ea80072585a8ecefe81c695f7008ec4a3fc3bc2570135f3ee9bde0aa10b54261->leave($__internal_ea80072585a8ecefe81c695f7008ec4a3fc3bc2570135f3ee9bde0aa10b54261_prof);

        
        $__internal_1051d7c7392bfd7793f8193a499ca9ab227938f49e6201eb3f07ef60126177d3->leave($__internal_1051d7c7392bfd7793f8193a499ca9ab227938f49e6201eb3f07ef60126177d3_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtRole/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Catégorie {% endblock %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un rôle</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.roleName) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_role\"/>
                        <a href=\"{{ path('role_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtRole/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtRole\\edit.html.twig");
    }
}
